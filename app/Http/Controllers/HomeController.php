<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('index', compact('messages'));
    }

    public function create(Request $request)
    {
        $message = Message::create([
            'content' => $request->content,
            'sender_name' => $request->sender_name ?? 'Anonymous'
        ]);

        broadcast(new NewMessage($message))->toOthers();

        return response()->json(['status' => 'Message Sent!']);
    }
}
