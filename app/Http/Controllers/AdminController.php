<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Enquiry;
use App\Models\Room;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    const SINGLE = 1000;
    const DOUBLE = 2000;
    const FAMILY = 3000;

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $user = Auth::user()->role;
        if ($user === 'Receptionist')
        {
            return redirect('/reception');
        }


        $bookings = Booking::all();

        $available_rooms = $this->getAvailableRooms();
        $latest_bookings = $this->getLatestBookings();
        $total_earnings = $this->getTotalEarnings();
        $total_enquiries =  $this->getTotalEnquiries();
        $inquiries = Enquiry::all();

        return view('Admin.admin', compact('bookings','available_rooms','latest_bookings','total_earnings','total_enquiries','inquiries'));
    }

    function getAvailableRooms()
    {
        $available_rooms = Room::all()
            ->where('Status','=','Free')->count();

        return $available_rooms;
    }

    function getLatestBookings()
    {
        $bookings = Booking::all()->sortByDesc('created_at')->first()->count();

        return $bookings;
    }

    function getTotalEarnings()
    {
        $single_room_count = Booking::all()
            ->where('RoomType','=','Single')
            ->where('Status','=','Paid')
            ->count();
        $double_room_count = Booking::all()
            ->where('RoomType','=','Double')
            ->where('Status','=','Paid')
            ->count();
        $family_room_count = Booking::all()
            ->where('RoomType','=','Family')
            ->where('Status','=','Paid')
            ->count();


        $single = $single_room_count * self::SINGLE;
        $double = $double_room_count * self::DOUBLE;
        $family = $family_room_count * self::FAMILY;

        return $single + $double + $family;
    }

    function getTotalEnquiries()
    {
        $enquiries = Enquiry::all()->count();

        return $enquiries;
    }

    public function insert(Request $request)
    {
        $request->validate([
            'FirstName' => 'required|max:50|string',
            'LastName' => 'required|max:50|string',
            'Email' => 'required|max:255|email',
            'MobileNumber' => 'required|max:15|string',
            'Gender' => 'required|max:10|string',
            'Address' => 'required|max:255|string',
            'Education' => 'required|max:255|string',
            'Password' => 'required|min:6|max:255|string',
            'DOB' => 'required|max:255|date',
            'Designation' => 'required|max:255|string',
            'JoiningDate' => 'required|max:255|string',

        ]);


        $data = new Staff();

        $data->FirstName = $request->FirstName;
        $data->LastName = $request->LastName;
        $data->Email = $request->Email;
        $data->Gender = $request->Gender;
        $data->MobileNumber = $request->MobileNumber;
        $data->Address = $request->Address;
        $data->Education = $request->Education;
        $data->Role = $request->Designation;
        $data->DOB = $request->DOB;
        $data->JoiningDate = $request->JoiningDate;

        $data->save();

        return redirect('/admin');
    }

    public function getStaff()
    {
        $members = Staff::all();
        return view('Admin.view-staff', compact('members'));
    }

    public function edit($id)
    {
        $member = Staff::findOrFail($id);

        return view('Admin.edit-staff',compact('member'));
    }

    public function update(Request $request)
    {

        $request->validate([
            'FirstName' => 'required|max:50|string',
            'LastName' => 'required|max:50|string',
            'Email' => 'required|max:255|email',
            'MobileNumber' => 'required|max:15|string',
            'Gender' => 'required|max:10|string',
            'Address' => 'required|max:255|string',
            'Education' => 'required|max:255|string',
            'DOB' => 'required|max:255|date',
            'Designation' => 'required|max:255|string',
            'JoiningDate' => 'required|max:255|string',
        ]);


        $data = Staff::findOrFail($request->id);

        $data->FirstName = $request->FirstName;
        $data->LastName = $request->LastName;
        $data->Email = $request->Email;
        $data->Gender = $request->Gender;
        $data->MobileNumber = $request->MobileNumber;
        $data->Address = $request->Address;
        $data->Education = $request->Education;
        $data->Role = $request->Designation;
        $data->DOB = $request->DOB;
        $data->JoiningDate = $request->JoiningDate;

        $data->update();

        return redirect('/view-staff');

    }

    public function delete($id)
    {
        $member = Staff::findOrFail($id);

        $member->delete();

        return redirect('/view-staff');
    }
}
