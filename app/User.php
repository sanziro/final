<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
   protected $table = 'my_users';
   protected $fillable = ['first_name', 'last_name', 'email'];
   protected $guarded = ['id', 'password'];

   $users = User::all();


   $user = new User;

$user->name = 'John';

$user->save();
}
