<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use Exception;

class BookingController extends Controller
{
    public function create(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'FirstName' => 'required|max:50|string',
            'LastName' => 'required|max:50|string',
            'Email' => 'required|max:255|email',
            'City' => 'required|max:255|string',
            'MobileNumber' => 'required|max:15|string',
            'Gender' => 'required|max:10|string',
            'Number_of_Persons' => 'required|max:10|numeric',
            'RoomType' => 'required|max:10|string',
            'Address' => 'required|max:255|string',
            'Status' => 'required|max:10|string',

        ]);

        $assigned_room = $this->getRoomNumber();

        // database

        $data = new Booking();
        $data->FirstName = $request->FirstName;
        $data->LastName = $request->LastName;
        $data->Email = $request->Email;
        $data->Gender = $request->Gender;
        $data->MobileNumber = $request->MobileNumber;
        $data->city = $request->City;
        $data->no_of_persons = $request->Number_of_Persons;
        $data->RoomType = $request->RoomType;
        $data->Status = $request->Status;
        $data->Address = $request->Address;
        $data->RoomNumber = $assigned_room;

        $data->save();


        $this->change_room_status($assigned_room);


        return redirect('/reception')->with('roomno',$assigned_room);

    }

    public  function getRoomNumber()
    {
        try
        {
            $room =   DB::table('rooms')->where('Status', 'Free')->pluck('id')->flatten();
            return $room[0];
        }
        catch (Exception  $e)
        {


            echo 'no rooms available ';
            echo '<a href="/reception">Return back</a>';
            dd();
        }
    }

    public function change_room_status($room)
    {
        $room = Room::find($room);
        $room->status = "Occupied";

        $room->save();
    }

    public  function GetDetails($id)
    {
        $booking_data = Booking::find($id);
//        $booking_data = Booking::find($id);
//        $data = $room_data->merge($booking_data);

        return view('Reception.edit-room', compact('booking_data','id'));
    }




    public  function edit(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'FirstName' => 'required|max:50|string',
            'LastName' => 'required|max:50|string',
            'Email' => 'required|max:255|email',
            'City' => 'required|max:255|string',
            'MobileNumber' => 'required|max:15|string',
            'Gender' => 'required|max:10|string',
            'Number_of_Persons' => 'required|max:10|numeric',
            'RoomType' => 'required|max:10|string',
            'Address' => 'required|max:255|string',
            'Status' => 'required|max:10|string',

        ]);

        //$assigned_room = $this->getRoomNumber();

        // database

        $data = Booking::find($request->id);

        $data->FirstName = $request->FirstName;
        $data->LastName = $request->LastName;
        $data->Email = $request->Email;
        $data->Gender = $request->Gender;
        $data->MobileNumber = $request->MobileNumber;
        $data->city = $request->City;
        $data->no_of_persons = $request->Number_of_Persons;
        $data->RoomType = $request->RoomType;
        $data->Status = $request->Status;
        $data->Address = $request->Address;
        //$data->RoomNumber = $assigned_room;

        $data->update();

       // dd("working");

        //$this->change_room_status($assigned_room);


        return redirect('/reception');

    }


}
