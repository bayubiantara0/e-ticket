<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function index()
    {
        return view('checkin.index');
    }

    public function check(Request $request)
    {
        $request->validate([
            'ticket_id' => 'required|exists:tickets,ticket_id',
        ]);

        $ticket = Ticket::where('ticket_id', $request->ticket_id)->first();
        if ($ticket->checked_in) {
            return back()->withErrors(['ticket_id' => 'Ticket has already been checked in.']);
        }

        $ticket->update(['checked_in' => true]);
        return view('checkin.show', ['ticket' => $ticket]);
    }
}

