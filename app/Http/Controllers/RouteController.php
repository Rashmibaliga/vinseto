<?php

namespace App\Http\Controllers;

use App\EventBook;
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
    public function getEvent(Request $req)
    {
         
        $eventBook =EventBook::where('hallname',$req->input('hallname'))
       ->where('eventdate',$req->input('date'))
        ->get();
    //     $eventBook =EventBook::where('hallname','Phalguni Seminar Hall')
    //    ->where('eventdate','2020-12-18')
    //     ->get();
        $i=0;
        $sendEventBook=[];
        foreach ($eventBook as $p) {
            $sendEventBook[$i]=$p->timeslot;
            $i++;

          }
         return view('event')->with('sendEventBook',$sendEventBook);
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
