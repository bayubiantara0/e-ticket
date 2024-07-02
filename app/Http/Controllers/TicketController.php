<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TicketController extends Controller
{
    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $ticket = Ticket::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'ticket_id' => Str::uuid(),
        ]);

        return view('tickets.show', ['ticket' => $ticket]);
    }
}
