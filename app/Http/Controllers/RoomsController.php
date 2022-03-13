<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{

    public function index()
    {
        $bookings = Booking::all();

        //dd($bookings[0]['id']);

        //$rooms = array_merge($data,$bookings);

        //dd($rooms);

        return view('Reception.reception',compact('bookings'));
    }

    public  function view()
    {
        $bookings = Booking::all();
        return view('Reception.available-rooms',compact('bookings'));
    }

}
