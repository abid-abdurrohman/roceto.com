<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Match;
use App\Model\Statistic;
use App\Model\Participant;
use App\Model\User;
use App\Model\Rank;
use App\Http\Requests;

class EventStatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(5);
        return view('admin.statistic.event', compact('events'));
    }

    public function show($id)
    {
        $events = Event::findOrFail($id);
        $statistics = Statistic::join('participants', 'participants.id', '=', 'statistics.participant_id')
        ->join('ranks', 'ranks.id', '=', 'statistics.rank_id')
        ->where('participants.event_id', $id)
        ->select('participants.nama_tim as nama_participant', 'ranks.title as nama_rank', 'statistics.*')->paginate(5);
        $participants = Participant::where('event_id', $id)->lists('nama_tim', 'id');
        $ranks = Rank::lists('title', 'id');
        return view('admin.statistic.index', compact('statistics', 'events', 'participants', 'ranks'));
    }
}
