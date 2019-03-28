<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'logins';
    protected $primaryKey = 'id';

    protected $fillable = [
      'user_name', 'user_password'
    ];

}
