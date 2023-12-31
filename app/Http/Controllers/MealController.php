<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function getMealsByCategory($categoryId)
    {
        $meals = Meal::where('category_id', $categoryId)->get();
        return response()->json($meals);
    }
}
