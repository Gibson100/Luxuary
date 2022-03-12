<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomsController;
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

Route::get('/', function () {
    return view('User.index');
});

Route::view('/logout','User.about');

Route::view('/about','User.about');

Route::view('/contact','User.contact');

Route::view('/admin','Admin.admin');


Route::post('/login',[\App\Http\Controllers\Auth\LoginController::class]);

Route::view('/addstaff','Admin.add-staff');

Route::view('/view-staff','Admin.view-staff');

Route::view('/edit-staff','Admin.edit-staff');


Route::get('/reception',[RoomsController::class,'index']);

Route:: view('/reception/AddBooking','Reception.AddBooking');

Route::view('/view-available','Reception.available-rooms');

Route::get('/edit/room/',[BookingController::class,'edit']);

Route::get('/reception/edit/room/{id}',[BookingController::class,'GetDetails']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 12-03-2022
Route::get('/reception/createBooking',[BookingController::class,'create']);

