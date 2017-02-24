<?php

namespace Tendaz\Http\Controllers\Admin\Help;


use Symfony\Component\HttpFoundation\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Help\Ticket;
use Tendaz\Models\Help\TicketsComment;

class HelpController extends Controller
{


    public function index()
    {
        return view('admin.help.index');
    }

    public function comments(Request $request)
    {
        $ticket = Ticket::where('uuid', $request->get('uuid'))->first();
        TicketsComment::create([
            'content' => $request->get('message'),
            'user_id' => auth('admins')->user()->id,
            'ticket_id' => $ticket->id
        ]);
        return redirect()->back();
    }


    public function video()
    {
        return view('admin.help.select-module');
    }

    public function chat()
    {
        return view('admin.help.chat-support');
    }

    public function destroy(){

    }

}
