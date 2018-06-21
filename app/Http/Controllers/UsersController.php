<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function user($id)
    {
      $user = \App\User::findOrFail($id);
      return view('user', ['user' => $user]);
    }
}
