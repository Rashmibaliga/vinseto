<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function getDashboard()
    {
        return view('dashboard');
    }
    
    public function getBookings()
    {
        return view('bookings');
    }
    public function getEvent()
    {
        return view('event');
    }
   
}
// public function book(Request $req)
// {

//     $book = new eventbook;
//     $book ->hallname =$req ->input('hallname');
//     $book ->eventdate =$req ->input('eventdate');
//     $book ->eventname =$req ->input('eventname');
//     $book ->timeslotid =$req ->input('timeslot');
//     $book -> save();

   
// }
