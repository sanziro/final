<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
   protected $table = 'Usuarios';
   protected $fillable = ['username', 'rol'];
   protected $guarded = ['id','habilitado', 'password'];

  // $users = User::all();


  // $user = new User;
//$user = Auth::user();
//$user->username = 'Johnprueba';

//$user->save();
}
