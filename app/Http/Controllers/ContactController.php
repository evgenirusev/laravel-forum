<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create() {
      return view('contact.create');
    }

    public function store(Request $request) {

      $this->validate($request, [
        'email' => 'required|email',
        'content' => 'required|min:8'
      ]);

      $msg = new \App\ContactMessage();
      $msg->email = $request->email;
      $msg->content = $request->content;

      return redirect()->back()->with('message', 'Thanks for contacting us! We will be in touch with you shortly.');
    }
}
