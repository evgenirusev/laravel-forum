<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest')->only('create');
      $this->middleware('auth')->only('destroy');
    }

    public function create()
    {
      return view('session.create');
    }

    public function store(Request $request)
    {
      if(! auth()->attempt(request(['email', 'password']))) {
          return back()->withErrors([
            'message' => 'Please check your credentials and try again'
          ]);
        }
        return redirect()->route('home');
    }

    public function destroy()
    {
      Auth::logout();
      return redirect()->route('home');
    }
}
