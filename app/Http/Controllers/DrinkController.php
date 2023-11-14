<?php

namespace App\Http\Controllers;
use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index()
{
    return view('drink/all', [
        "tittle" => "drinks",
        "drinks" => Drink::all()
    ]);
}

public function show(Drink $drink)
{
    return view('drink.detail', [
        "tittle" => "detail-drink",
        "drink" => $drink
    ]);
}

}
