<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

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



Route::get('aboutus', function (){
    return view('aboutus');
})->name('about.us');


Route::get('/',[MovieController::class,'index'])->name('movieapp.index');
Route::get('/movies/{movie}',[MovieController::class,'show'])->name('movieapp.show');

