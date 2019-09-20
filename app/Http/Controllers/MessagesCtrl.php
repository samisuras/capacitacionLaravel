<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesCtrl extends Controller
{
    //
    public function store(Request $request){
        request()->validate([
             'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'content' => 'required'
        ]);

        return "Datos validados";
    }
}
