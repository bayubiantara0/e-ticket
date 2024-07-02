<?php

namespace App\Http\Controllers;

use App\Models\Ticket;

class ReportController extends Controller
{
    public function index()
    {
        $checkedIn = Ticket::where('checked_in', true)->get();
        $notCheckedIn = Ticket::where('checked_in', false)->get();
        return view('report.index', ['checkedIn' => $checkedIn, 'notCheckedIn' => $notCheckedIn]);
    }
}
