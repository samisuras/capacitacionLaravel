<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesCtrl extends Controller
{
    //
    public function store(Request $request){
        return request('email');
    }
}
