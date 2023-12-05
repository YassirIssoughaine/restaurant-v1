<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use App\Models\Client as ClientB;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
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
        }
        Mail::mailer('smtp')->to('sykweb@gmail.com')->send(new Email($request->person,$request->reservationDate,$request->time,$request->message,$request->name,$request->phone));
        return redirect('/');
    }
}
