<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function user($id)
    {
      $user = \App\User::findOrFail($id);
      return view('user', ['user' => $user]);
    }
}
