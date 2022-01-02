<?php

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

Route::view('/about','User.about');

Route::view('/contact','User.contact');


Route::view('/admin','Admin.admin');

Route::view('/addstaff','Admin.add-staff');

Route::view('/view-staff','Admin.view-staff');

Route::view('/edit-staff','Admin.edit-staff');


Route::view('/reception','Reception.reception');

Route::view('/view-available','Reception.available-rooms');

Route::view('/edit/room','Reception.edit-room');
