<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventBook extends Model
{
    protected $table = 'event_books';
   protected $fillable=['hallname','eventname','eventdate','timeslot'];
   protected $primaryKey = 'bookid';
}
