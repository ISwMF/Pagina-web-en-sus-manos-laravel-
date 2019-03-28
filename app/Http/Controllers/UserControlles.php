<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;

class UserControlles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      return $users;
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
    public function store(Request $request)
    {
      $usuario = new User;
      $usuario->user_name = $request->name;
      $usuario->user_login = $request->login;
      $usuario->user_password = $request->password;
      $usuario->user_points = $request->points;
      $usuario->save();
      return "Done";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      if (!is_null($id)) {
        return User::where('id', $id)->get();
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getHomeInformation(){
      $users = User::orderBy('user_points', 'desc')->take(10)->get();
      $citizen = $this->show(1);
      $citizenAUX = json_decode($citizen[0]);
      $EventsCreated = Event::where('id_citizen_creator', 1)->take(3)->get();
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

      $EventsReceived = Event::where('id_citizen_receive', 1)->take(3)->get();
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
      return view('vista1', ['citizen' => $citizenAUX, 'users'=>$users, 'EventsCreated' => $EventsCreated, 'EventsReceived' => $EventsReceived]);
    }
}
