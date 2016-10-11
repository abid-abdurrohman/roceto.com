<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Match;
use App\Model\Match_team;
use App\Http\Requests;

class ResultUserController extends Controller
{
    public function index()
    {
        // $matches = Match::orderBy('matches.waktu')->where('matches.status', 'done')->get();
        // $match_teams = Match_team::join('matches', 'matches.id', '=', 'match_teams.match_id')
        //   ->join('participants', 'participants.id', '=', 'match_teams.participant_id')
        //   ->select('participants.nama_tim as nama_participant', 'participants.logo_tim as logo_participant',
        //   'match_teams.score as team_score', 'matches.*')
        //   ->orderBy('matches.waktu')->where('matches.status', 'done')->get()->toArray();
        return view('result.index');
    }
}
