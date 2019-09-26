<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesCtrl extends Controller
{
    //
    public function store(Request $request){
        $msg = request()->validate([
             'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'content' => 'required'
        ],[
            'name.required' => 'Ponle tu nombre compa'
        ]);

        Mail::to('raulsamuelleos98@gmail.com')->queue(new MessageReceived($msg));

        return back()->with('status','Recibimos tu mensaje, te responderemos en menos de 24 horas');
    }
}
