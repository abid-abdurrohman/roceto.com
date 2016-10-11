<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Match;
use App\Model\Match_team;
use App\Http\Requests;
use PDF;

class BracketUserController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('bracket.index', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        $matches = Match::where('event_id', $id)->paginate(5);
        return view('bracket.show', compact('event', 'matches'));
    }

    public function getPDF($id)
    {
        $events = Event::findOrFail($id);
        $matches = Match::where('event_id', $id)->paginate(5);
        $pdf = PDF::loadView('bracket.pdf.bracket', compact('events', 'matches'));
        return $pdf->stream('bracket.index', compact('events', 'matches'));
    }
}
