<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class RegisterController extends Controller
{
  public function create()
  {
    return view('register.create');
  }

  public function store(Request $request)
  {

    $this->validate($request ,[
      'name' => 'required|min:3',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:7|confirmed',
    ]);

    $user = User::create([
      'name' => request('name'),
      'email' => request('email'),
      'password' => bcrypt(request('password'))
    ]);

    auth()->login($user);

    return redirect()->route('home');
  }
}
