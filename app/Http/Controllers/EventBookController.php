<?php

namespace App\Http\Controllers;

use App\EventBook;
use Illuminate\Http\Request;

class EventBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $book = new EventBook;
            $book ->hallname =$req ->input('hallname');
            $book ->eventdate =$req ->input('eventdate');
            $book ->eventname =$req ->input('eventname'); 
            $book ->name =$req ->input('name'); 
            $book ->phoneno =$req ->input('phonenumber'); 
               $arraytostring=implode(',', $req->input('timeslot'));
              
               $book ->timeslot=$arraytostring;
            $book -> save();
           
            return redirect('/dashboard')->with('msg',"Booking done successfully!!!");
           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventBook  $eventBook
     * @return \Illuminate\Http\Response
     */
    public function show(EventBook $eventBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventBook  $eventBook
     * @return \Illuminate\Http\Response
     */
    public function edit(EventBook $eventBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventBook  $eventBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventBook $eventBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventBook  $eventBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventBook $eventBook)
    {
        //
    }
}