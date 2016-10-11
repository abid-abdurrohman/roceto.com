<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Event;
use App\Model\Match;
use App\Model\Match_team;
use App\Model\Match_score;
use App\Model\Member;
use App\Http\Requests;

class MatchTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, $id_part, $id_match)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $id_part, $id_match)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id, $id_part, $id_match)
    {
        $this->validate($request, [
            'participant_id' => 'required',
        ]);
        $input = $request->all();
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $input['match_id'] = $matches->id;
        Match_team::create($input);
        return redirect()->action('MatchController@show', [$events->id, $id_part, $matches->id])->with('success', 'Team has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_part, $id_match, $id_team)
    {
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $match_teams = Match_team::findOrFail($id_team);
        $members = Member::where('participant_id',$match_teams->participant_id)->lists('nama', 'id');
        $match_teams = Match_team::join('participants', 'participants.id', '=', 'match_teams.participant_id')
          ->select('participants.nama_tim as nama_participant', 'match_teams.*')->findOrFail($id_team);
        $match_scores = Match_score::where('match_team_id', $id_team)->join('members', 'members.id', '=', 'match_scores.member_id')
          ->select('members.nama as nama_member', 'match_scores.*')->get();
        return view('admin.match_team.show', compact('events', 'matches', 'match_teams', 'members', 'match_scores', 'id_part'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_part, $id_match, $id_team)
    {
        $events = Event::findOrFail($id);
        $matches = Member::findOrFail($id_match);
        $match_team = Match_team::findOrFail($id_team);
        $participants = Participant::where('event_id', $id)->where('status','validated')->lists('nama_tim', 'id');
        return view('admin.match_team.edit', compact('events', 'matches', 'match_team', 'participants', 'id_part'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_part, $id_match, $id_team)
    {
        $this->validate($request, [
            'participant_id' => 'required',
        ]);
        $input = $request->all();
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $match_teams = Match_team::findOrFail($id_team);
        $match_teams->update($input);
        return redirect()->action('MatchController@show', [$events->id, $id_part, $matches->id])->with('info', 'Team has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_part, $id_match, $id_team)
    {
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $match_teams = Match_team::findOrFail($id_team);
        $match_teams->delete();
        return redirect()->action('MatchController@show', [$events->id, $id_part, $matches->id])->with('danger', 'Event has been deleted');
    }
}
