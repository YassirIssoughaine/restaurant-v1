<?php

namespace App\Http\Controllers;

use Twilio\Rest\Client;
use Illuminate\Http\Request;
use App\Models\Client as ClientB;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $client = ClientB::where('phone', $request->phone)->first();

        // Check if the client exists
        if ($client) {
            $booking = new Booking();
            $booking->numberPersons = $request->person;
            $booking->date = $request->reservationDate;
            $booking->time = $request->time;
            $booking->message = $request->message;
            $booking->client_id = $client->id;
            $booking->save();
            return redirect('/');
        } else {
            $createClient = new ClientB();
            $createClient->name = $request->name;
            $createClient->phone = $request->phone;
            $createClient->save();
            $booking = new Booking();
            $booking->numberPersons = $request->person;
            $booking->date = $request->reservationDate;
            $booking->time = $request->time;
            $booking->message = $request->message;
            $booking->client_id = $createClient->id;
            $booking->save();
            return redirect('/');
        }

        // Send WhatsApp message using Twilio
        $accountSid = 'your-account-sid';
        $authToken = 'your-auth-token';
        $twilioPhoneNumber = 'your-twilio-phone-number';
        $recipientPhoneNumber = 'whatsapp:' . '1234567890'; // Replace with the actual recipient's phone number
        $message = 'Thank you for your booking!';

        try {
            $twilio = new Client($accountSid, $authToken);

            $message = $twilio->messages->create(
                $recipientPhoneNumber,
                [
                    'from' => $twilioPhoneNumber,
                    'body' => $message,
                ]
            );

            // Handle success

        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json(['error' => $e->getMessage()], 500);
        }

        // Return a success response or redirect as needed
        return response()->json(['message' => 'Booking successful! WhatsApp message sent.']);
    }
}
