<?php

namespace App\Http\Controllers;

use App\ChatMessage;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(){

        $users = User::all();
        $messages = ChatMessage::all();

        return view('/chat', compact('users', 'messages'));
    }

    //Post a message
    public function store(request $request){

        $this->validate($request, [
           'message' => 'required',
        ]);
        $message = new ChatMessage();
        $message->user_name = $request->user()->name;
        $message->message = $request->input('message');
        $message->save();
        return redirect('/chat');
    }

    public function ajaxPost(request $request){



        if($request->isMethod('get')){
            $message = ChatMessage::all();
            $users = User::all('id');
            return $message->toJson();
        }
        return response()->json(['response' => 'get works']);
    }
}
