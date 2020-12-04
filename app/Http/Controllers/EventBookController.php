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
    public function index()
    {
        //
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
               $arraytostring=implode(',', $req->input('timeslot'));
              
               $book ->timeslot=$arraytostring;
            $book -> save();
           
            return redirect('/dashboard');
           
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