<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\StaffController;
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

Route::post('/inquiry',[EnquiryController::class,'index']);

Route::get('/logout',function (){
    Auth::logout();

    return redirect('/login');
});

Route::view('/about','User.about');

Route::view('/contact','User.contact');

Route::get('/admin',[AdminController::class,'index']);


Route::post('/login',[LoginController::class]);

Route::view('/addstaff','Admin.add-staff');

Route::get('/admin/addStaff',[AdminController::class,'insert']);

Route::get('/view-staff',[AdminController::class,'getStaff']);

Route::get('/edit/staff/{id}',[AdminController::class,'edit']);

Route::get('admin/edit/staff',[AdminController::class,'update']);

Route::get('/delete/staff/{id}',[AdminController::class,'delete']);


Route::get('/reception',[RoomsController::class,'index']);

Route:: view('/reception/AddBooking','Reception.AddBooking');

Route::get('/view-available',[RoomsController::class,'view']);

Route::get('/edit/room/',[BookingController::class,'edit']);

Route::get('/reception/edit/room/{id}',[BookingController::class,'GetDetails']);

Route::get('/reception/delete/{id}/{roomid}',[BookingController::class,'delete']);

Route::get('/edit-staff/{id}',[AdminController::class,'edit']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 12-03-2022
Route::get('/reception/createBooking',[BookingController::class,'create']);

