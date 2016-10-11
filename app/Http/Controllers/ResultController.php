<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\User;
use App\Model\Statistic;
use App\Http\Requests;
use DB;

class ResultController extends Controller
{
    public function index()
    {
        $statistics = Statistic::join('participants', 'participants.id', '=', 'statistics.participant_id')
        ->join('users', 'users.id', '=', 'participants.user_id')
        ->select(
        DB::raw("SELECT COUNT(participants.user_id) as juara1, participants.user_id FROM statistics INNER JOIN participants
        ON participants.id = statistics.participant_id WHERE statistics.rank_id = 1 GROUP BY participants.user_id"),
        DB::raw("SELECT COUNT(participants.user_id) as juara2, participants.user_id FROM statistics INNER JOIN participants
        ON participants.id = statistics.participant_id WHERE statistics.rank_id = 2 GROUP BY participants.user_id"),
        DB::raw("SELECT COUNT(participants.user_id) as juara3, participants.user_id FROM statistics INNER JOIN participants
        ON participants.id = statistics.participant_id WHERE statistics.rank_id = 3 GROUP BY participants.user_id")
        )->groupBy('participants.user_id')
        ->get();
        $statistics = DB::raw('SELECT participants.user_id,
          SELECT COUNT(participants.user_id) as juara1, participants.user_id FROM statistics INNER JOIN participants
          ON participants.id = statistics.participant_id WHERE statistics.rank_id = 1 GROUP BY participants.user_id,
          SELECT COUNT(participants.user_id) as juara2, participants.user_id FROM statistics INNER JOIN participants
          ON participants.id = statistics.participant_id WHERE statistics.rank_id = 2 GROUP BY participants.user_id,
          SELECT COUNT(participants.user_id) as juara3, participants.user_id FROM statistics INNER JOIN participants
          ON participants.id = statistics.participant_id WHERE statistics.rank_id = 3 GROUP BY participants.user_id
          FROM statistics INNER JOIN participants ON participants.id = statistics.participant_id'
          )
        return dd($statistics);
        return view('admin.result.index');
    }
}
