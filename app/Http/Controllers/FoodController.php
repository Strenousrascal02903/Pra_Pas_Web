<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
         return view('food/all',[
            "tittle" => "foods",
            "foods" => Food::all()
        ]);
    }

    public function show(Food $food)
    {
        return view('food.detail', [
            "tittle" => "detail-food",
            "food" => $food 
        ]);
    }
}
