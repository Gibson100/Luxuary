<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{

    public function  index()
    {
        $rooms = Room::all();

        //dd($bookings[0]['id']);

        //$rooms = array_merge($data,$bookings);

        //dd($rooms);

        return view('Reception.reception',compact('rooms'));
    }

}
