<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('admin.index', ['tickets' => $tickets]);
    }

    public function edit(Ticket $ticket)
    {
        return view('admin.edit', ['ticket' => $ticket]);
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        $ticket->update($request->all());
        return redirect()->route('ticketlist.index')->with('success', 'Ticket updated successfully!');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('ticketlist.index')->with('success', 'Ticket deleted successfully!');
    }
}

