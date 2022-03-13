<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Staff;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();

        return view('Admin.admin', compact('bookings'));
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


        $password = $request->password;

        $password = md5($password);

        $data = new Staff();
        $data->FirstName = $request->FirstName;
        $data->LastName = $request->LastName;
        $data->Email = $request->Email;
        $data->Gender = $request->Gender;
        $data->MobileNumber = $request->MobileNumber;
        $data->Address = $request->Address;
        $data->Password = $password;
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
