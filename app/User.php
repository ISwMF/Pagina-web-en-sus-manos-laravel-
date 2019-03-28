<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  protected $table = 'users';
  protected $primaryKey = 'id';
  protected $fillable = [
    'user_name', 'user_login', 'user_password', 'user_points'
  ];

  public function Event(){
    return $this->hasMany('App\Event');
  }
}
