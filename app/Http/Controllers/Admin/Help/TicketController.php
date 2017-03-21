<?php

namespace Tendaz\Http\Controllers\Admin\Help;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use Tendaz\Http\Controllers\Controller;
use Tendaz\Models\Help\Ticket;
use Tendaz\Models\Help\TicketsComment;


class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::where('user_id',Auth('admins')->user()->id)->get();
        return view('admin.help.ticket',compact('tickets'));
    }

    public function create()
    {

    }


    public function store(Request $request)
    {
        Ticket::create([
            'user_id' => auth('admins')->user()->id,
            'subject' => $request->get('subject'),
            'description' => $request->get('description')
        ]);
        return redirect()->to('admin/help/tickets')->with('message', array('type' => 'success' , 'message' => 'Ticket creado correctamente'));
    }


    public function show($subdomain , Ticket $ticket){
        $comments = TicketsComment::all();
        return view('admin.help.chat-message',compact('ticket','comments'));
    }

    public function update()
    {

    }

    public function destroy(){

    }

}
