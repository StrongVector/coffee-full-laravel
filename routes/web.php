<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\MakananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/coffee/all', [CoffeeController::class, 'index']);
Route::get('/coffee/detail/{coffee}', [CoffeeController::class, 'show']);
Route::get('/makanan/all', [MakananController::class, 'index']);
Route::get('/makanan/detail/{makanan}', [MakananController::class, 'show']);
