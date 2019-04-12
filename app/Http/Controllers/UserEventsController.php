<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Login;
use App\Event;
use Session;

class UserEventsController extends Controller
{
    public function showEvents(){
      if (Session::has('id')) {
        $EventsReceived = Event::where('id_citizen_receive', Session::get('id'))->get();
        $EventsCreated = Event::where('id_citizen_creator', Session::get('id'))->get();
        foreach ($EventsReceived as $EventReceived) {
          $d = $d = date_parse_from_format("Y-m-d", $EventReceived->event_date);
          switch ($d["month"]) {
            case 1:
            $EventReceived->event_date = $d["day"]. " de enero del ". $d["year"];
            break;
            case 2:
            $EventReceived->event_date = $d["day"]. " de febrero del ". $d["year"];
            break;
            case 3:
            $EventReceived->event_date = $d["day"]. " de marzo del ". $d["year"];
            break;
            case 4:
            $EventReceived->event_date = $d["day"]. " de abril del ". $d["year"];
            break;
            case 5:
            $EventReceived->event_date = $d["day"]. " de mayo del ". $d["year"];
            break;
            case 6:
            $EventReceived->event_date = $d["day"]. " de junio del ". $d["year"];
            break;
            case 7:
            $EventReceived->event_date = $d["day"]. " de julio del ". $d["year"];
            break;
            case 8:
            $EventReceived->event_date = $d["day"]. " de agosto del ". $d["year"];
            break;
            case 9:
            $EventReceived->event_date = $d["day"]. " de septiembre del ". $d["year"];
            break;
            case 10:
            $EventReceived->event_date = $d["day"]. " de octubre del ". $d["year"];
            break;
            case 11:
            $EventReceived->event_date = $d["day"]. " de noviembre del ". $d["year"];
            break;
            case 12:
            $EventReceived->event_date = $d["day"]. " de diciembre del ". $d["year"];
            break;
          }
        }
        foreach ($EventsCreated as $EventCreated) {
          $d = $d = date_parse_from_format("Y-m-d", $EventCreated->event_date);
          switch ($d["month"]) {
            case 1:
            $EventCreated->event_date = $d["day"]. " de enero del ". $d["year"];
            break;
            case 2:
            $EventCreated->event_date = $d["day"]. " de febrero del ". $d["year"];
            break;
            case 3:
            $EventCreated->event_date = $d["day"]. " de marzo del ". $d["year"];
            break;
            case 4:
            $EventCreated->event_date = $d["day"]. " de abril del ". $d["year"];
            break;
            case 5:
            $EventCreated->event_date = $d["day"]. " de mayo del ". $d["year"];
            break;
            case 6:
            $EventCreated->event_date = $d["day"]. " de junio del ". $d["year"];
            break;
            case 7:
            $EventCreated->event_date = $d["day"]. " de julio del ". $d["year"];
            break;
            case 8:
            $EventCreated->event_date = $d["day"]. " de agosto del ". $d["year"];
            break;
            case 9:
            $EventCreated->event_date = $d["day"]. " de septiembre del ". $d["year"];
            break;
            case 10:
            $EventCreated->event_date = $d["day"]. " de octubre del ". $d["year"];
            break;
            case 11:
            $EventCreated->event_date = $d["day"]. " de noviembre del ". $d["year"];
            break;
            case 12:
            $EventCreated->event_date = $d["day"]. " de diciembre del ". $d["year"];
            break;
          }
        }
        return view('reportes', ['Events_Created'=>$EventsCreated, 'Events_Received'=>$EventsReceived]);
      }else{
        return view('login');
      }
    }
}
