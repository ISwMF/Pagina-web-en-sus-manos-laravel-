<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/vista1');
});

/*Route::post('userAuth',[
  'uses' => 'LoginController@store',
  'as'   => 'userView'
]);*/
Route::get('/', 'HomeController@getDefaultInformation');
Route::get('/home', 'HomeController@getDefaultInformation');

Route::get('/login', function(){
  return view('login');
});

Route::post('home',[
  'uses' => 'HomeController@goLogin',
  'as'   => 'userView'
]);
//Login usando Ajax
Route::post('postLoginRequestByAjax', 'HomeController@goLoginByAjax');

//Vista de Reportes
Route::get('/reportes', 'UserEventsController@showEvents');

//salir
Route::get('/salir', 'HomeController@salir');
