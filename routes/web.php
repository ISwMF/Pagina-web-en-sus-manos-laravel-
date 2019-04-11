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
    return view('welcome');
});

/*Route::post('userAuth',[
  'uses' => 'LoginController@store',
  'as'   => 'userView'
]);*/

Route::get('/home', 'UserControlles@getHomeInformation');

Route::get('/login', function(){
  return view('login');
});

Route::post('home',[
  'uses' => 'HomeController@goLogin',
  'as'   => 'userView'
]);
