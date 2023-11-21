<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\TableController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home' , ['nama' => 'HomePage', 'tittle' => 'HomePage']);
});


Route::get('/home', function () {
    return view('home' , ['nama' => 'HomePage', 'tittle' => 'HomePage']);
});
Route::get('/food/detail/{food}', [FoodController::class, 'show'])->name('food.show');

Route::get('/foods', [FoodController::class, 'index'])->name('food.index');

Route::get('/drink/detail/{drink}', [DrinkController::class, 'show'])->name('drink.show');

Route::get('/drinks', [DrinkController::class, 'index'])->name('drink.index');

Route::get('/table/detail/{table}', [TableController::class, 'show'])->name('table.show');

Route::get('/tables', [TableController::class, 'index'])->name('table.index');
