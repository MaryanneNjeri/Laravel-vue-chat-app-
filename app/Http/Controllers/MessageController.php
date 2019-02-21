<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    // 
    public function index()
    { // we get the messages for specific user remember it has a one to many relationship 
        
        $messages = Message::with([user])->get();
        return reponse()->json($messages);
    }
}
