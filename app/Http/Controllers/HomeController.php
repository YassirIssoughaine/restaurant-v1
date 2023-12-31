<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Meal;

class HomeController extends Controller
{
    public function index(){
        $meals = Meal::all();
        $categories = Category::all();
        return view('welcome',compact('meals','categories'));
    }
}
