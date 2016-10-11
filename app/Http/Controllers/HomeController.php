<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Model\News;
use App\Model\Event;
use App\Model\Participant;
use App\Model\Sponsor;
use App\Model\Match_team;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at')->limit(4)->get();
        $sponsors = Sponsor::orderBy('created_at')->limit(6)->get();
        $events = Event::all();
        // $participants = Participant::join('events', 'events.id', '=', 'participants.event_id')
        //     ->select('events.id as id_event', 'events.nama as nama_event', 'events.kuota as kuota', 'participants.*')
        //     ->where('status', 'validated')->whereIn('event_id', function($query){
        //     $query->select('id')
        //     ->from(with(new Event)->getTable());
        // })->get();
        // return dd($participants);
        // $count = $participants->count();
        // $kuota = ($count*100)/($row['kuota']+0.000001);
        $last_match_teams = Match_team::join('matches', 'matches.id', '=', 'match_teams.match_id')
          ->join('participants', 'participants.id', '=', 'match_teams.participant_id')
          ->select('participants.nama_tim as nama_participant', 'participants.logo_tim as logo_participant',
          'match_teams.score as team_score', 'match_teams.comment as team_comment', 'matches.*')
          ->where('matches.status', 'done')->limit(2)->get()->toArray();
        return view('home.home', compact('news', 'events', 'sponsors', 'last_match_teams'));
    }
}
