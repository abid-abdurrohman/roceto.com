<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Match;
use App\Model\Match_team;
use App\Http\Requests;

class EventMatchScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id, $id_part, $id_match)
    {
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $match_teams = Match_team::join('matches', 'matches.id', '=', 'match_teams.match_id')
          ->join('participants', 'participants.id', '=', 'match_teams.participant_id')
          ->select('participants.nama_tim as nama_participant', 'participants.logo_tim as logo_participant',
          'match_teams.score as team_score', 'match_teams.comment as team_comment', 'matches.*')
          ->where('match_id', $id_match)->get()->toArray();
        $match_team = Match_team::where('match_id', $id_match)->get()->toArray();
        return view('admin.match_score.index', compact('events', 'matches', 'match_teams', 'match_team', 'id_part'));
    }

    public function update(Request $request, $id, $id_part, $id_match, $id_team)
    {
        $this->validate($request, [
            'score' => 'required',
            'comment' => 'required',
        ]);
        $input = $request->all();
        $match_teams = Match_team::findOrFail($id_team);
        $match_teams->update($input);
        return redirect()->action('EventMatchScoreController@show', [$id, $id_part, $id_match])->with('info', 'Match has been updated');
    }

    public function endmatch($id, $id_part, $id_match)
    {
        $match = Match::findOrFail($id_match);
        $match['status'] = 'done';
        $match->update();
        $match_teams = Match_team::where('match_id', $id_match)->lists('score', 'id');
        $x = 0;
        foreach ($match_teams as $id_m => $match_team){
            if ($x == 1) {
                if ($match_team > $score_temp) {
                    $id_win = $id_m;
                }else{
                    $id_win = $id_temp;
                }
            }else{
                $score_temp = $match_team;
                $id_temp = $id_m;
            }
            $x++;
        }

        $match_team = Match_team::findOrFail($id_win);
        $match_team['status'] = 'win';
        $match_team->update();
        return redirect()->action('MatchController@index', [$id, $id_part])->with('info','Match has been done');
    }

    public function startmatch(Request $request, $id, $id_part, $id_match)
    {
        $this->validate($request, [
            'youtube' => 'required',
        ]);
        $match = Match::findOrFail($id_match);
        $match['youtube'] = $request->youtube;
        $match['status'] = 'playing';
        $match->update();
        return redirect()->action('EventMatchScoreController@show', [$id, $id_part, $id_match])->with('info','Match has start');
    }
}
