<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';

    protected $fillable = [
      'event_date', 'event_place', 'event_situation', 'event_description', 'id_citizen_creator', 'id_citizen_receive'
    ];

    public function UserCreator(){
      return $this->belongsTo('App\User', 'id_citizen_creator');
    }
    public function UserReceiver(){
      return $this->belongsTo('App\User','id_citizen_receive');
    }
}
