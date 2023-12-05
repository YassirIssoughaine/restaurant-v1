<?php

namespace App\Http\Controllers;

use App\Models\Meal;

class HomeController extends Controller
{
    public function index(){
        $meals = Meal::all();
        return view('welcome',compact('meals'));
    }
}
