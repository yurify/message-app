<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;  // WE NEED TO IMPORT IT HERE

class HomeController extends Controller
{
    public function index() {

        $messages = Message::all(); // WE JUST QUERY ALL THE ROWS

        // Now we need to pass all the messages to the view in a second array parameter
        // After that, we can use for loop inside the 'home' blade template with myMessages array  
        return view('home', [
                "myMessages" => $messages
            ]
        );
    }
}
