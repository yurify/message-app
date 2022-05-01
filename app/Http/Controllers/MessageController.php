<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // should be imported here
use App\Models\Message;

class MessageController extends Controller
{
    public function create(Request $request) {
        $message = new Message();
        
        // we might have used the following as in PHP, but that would throw an error if the title doesn't exist
        // $message->title = $_POST['title']; 

        // that's why we're gonna use request. We should specify it in the function parameter (inject it)
        // and now we have access to everything related to the request like post values, get values, agent, headers...
        $message->title = $request->title;
        $message->content = $request->content;

        $message->save(); // this will save the object to the database

        return redirect('/');
    }

    public function view($id) {
        $message = Message::findOrFail($id);

        return view('message_page',['myMessage'=> $message]);
    }
}
