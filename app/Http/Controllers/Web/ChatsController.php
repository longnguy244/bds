<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\MESSAGE;

class ChatsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('customer');
    }

    // Show chats
    public function index()
    {
        return view('web.pages.chat');
    }

    // Fetch all messages
    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    // Persist message to database
    public function sendMessage(Request $request)
    {
        $user = Auth::guard('customer')->user();

        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

        broadcast(new MessageSent($user, $message))->toOthers();
        
        return ['status' => 'Message Sent!'];
    }
}
