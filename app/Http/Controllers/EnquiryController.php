<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public  function index(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:500'
        ]);

        $data = new Enquiry();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;

        $data->save();

        return "<h1 align='center' style='font-size: 100px'>Thank you for your enquiry <br> <a class='btn btn-info' href='/'>Home</a></h1>";
    }
}
