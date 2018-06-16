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
        'name' => 'required|min:1',
        'email' => 'required|email',
        'message' => 'required|min:8',
        'subject' => 'required'
      ]);

      $msg = new \App\ContactMessage();

      $msg->name = $request->name;
      $msg->email = $request->email;
      $msg->subject = $request->subject;
      $msg->message = $request->content;

      return redirect()->back()->with('message', 'Thanks for contacting us! We will be in touch with you shortly.');
    }
}
