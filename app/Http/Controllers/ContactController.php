<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        Mail::send('emails.contact',
          array(
            'nama' => $request->get('nama'),
            'email' => $request->get('email'),
            'bodyMessage' => $request->get('message')
          ), function($message){
            $message->to('rocetomazzido@gmail.com')->from('rocetomazzido@gmail.com')->subject('New Message From Roceto Website');
          }
        );
        return redirect()->action('ContactController@index')->with('success', 'Email has been delivered');
    }
}
