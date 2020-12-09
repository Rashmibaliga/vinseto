<?php

namespace App\Http\Controllers;

use App\EventBook;
use DB;
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
    public function index()
    {
        $users = DB::select('select * from event_books');
        return view('dashboard',['users'=>$users]);
       
        // return view('event',compact(sendEventBook));
        // return view('event')->with('eventBook',$eventBook);
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
