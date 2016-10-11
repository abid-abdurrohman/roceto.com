<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Event;
use App\Model\Match;
use App\Model\Member;
use App\Model\Match_team;
use App\Http\Requests;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($id, $id_part)
    {
        $events = Event::findOrFail($id);
        $count = Match::where('event_id', $id)->where('no_match', $id_part)->count();
        $matches = Match::where('event_id', $id)->where('no_match', $id_part)->paginate(5);
        return view('admin.match.index', compact('matches', 'events', 'id_part', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $id_part)
    {
       /* $events = Event::findOrFail($id);
        $matches = Match::where('event_id', $id)->paginate(5);
        return view('admin.match.index', compact('matches', 'events'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id, $id_part)
    {
        $this->validate($request, [
            'nama' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'deskripsi' => 'required',
        ]);
        $input = $request->all();
        $events = Event::findOrFail($id);
        $input['event_id'] = $events->id;
        $input['no_match'] = $id_part;
        $input['status'] = "available";
        Match::create($input);
        return redirect()->action('MatchController@index', [$events->id, $id_part])->with('success', 'Match has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_part, $id_match)
    {
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $match_teams = Match_team::where('match_id', $id_match)->join('participants', 'participants.id', '=', 'match_teams.participant_id')
          ->select('participants.nama_tim as nama_participant', 'match_teams.*')->get();
        $teams = Match_team::join('matches', 'matches.id', '=', 'match_teams.match_id')
          ->join('participants', 'participants.id', '=', 'match_teams.participant_id')
          ->select('participants.nama_tim as nama_participant', 'participants.logo_tim as logo_participant',
          'match_teams.score as team_score', 'match_teams.comment as team_comment', 'matches.*')
          ->where('match_id', $id_match)->get()->toArray();
        if ($id_part == 1) {
           $participants = Participant::where('event_id', $id)->where('status','validated')->lists('nama_tim', 'id');
        }elseif ($id_part == 2) {
           $participants = Match_team::join('matches', 'matches.id', '=', 'match_teams.match_id')
           ->join('participants', 'participants.id', '=', 'match_teams.participant_id')
           ->where('participants.event_id', $id)
           ->where('matches.status', 'done')->where('matches.no_match', 1)->where('participants.status','validated')
           ->where('match_teams.status', 'win')->select('participants.nama_tim', 'participants.id as id_participant')
           ->lists('nama_tim', 'id_participant');
        }elseif ($id_part == 3) {
           $participants = Match_team::join('matches', 'matches.id', '=', 'match_teams.match_id')
           ->join('participants', 'participants.id', '=', 'match_teams.participant_id')
           ->where('participants.event_id', $id)
           ->where('matches.status', 'done')->where('matches.no_match', 2)->where('participants.status','validated')
           ->where('match_teams.status', 'win')->select('participants.nama_tim', 'participants.id as id_participant')
           ->lists('nama_tim', 'id_participant');
        }elseif ($id_part == 4) {
           $participants = Match_team::join('matches', 'matches.id', '=', 'match_teams.match_id')
           ->join('participants', 'participants.id', '=', 'match_teams.participant_id')
           ->where('participants.event_id', $id)
           ->where('matches.status', 'done')->where('matches.no_match', 3)->where('participants.status','validated')
           ->where('match_teams.status', 'win')->select('participants.nama_tim', 'participants.id as id_participant')
           ->lists('nama_tim', 'id_participant');
        }

        $count = Match_team::join('matches', 'matches.id', '=', 'match_teams.match_id')
          ->join('participants', 'participants.id', '=', 'match_teams.participant_id')
          ->select('participants.nama_tim as nama_participant', 'participants.logo_tim as logo_participant',
          'match_teams.score as team_score', 'match_teams.comment as team_comment', 'matches.*')
          ->where('match_id', $id_match)->get();
        return view('admin.match.show', compact('events', 'matches', 'participants', 'match_teams', 'teams', 'count', 'id_part'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_part, $id_match)
    {
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        return view('admin.match.edit', compact('events', 'matches', 'id_part'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_part, $id_match)
    {
        $this->validate($request, [
            'nama' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'deskripsi' => 'required',
        ]);
        $input = $request->all();
        $events = Event::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $input['status'] = "available";
        $matches->update($input);
        return redirect()->action('MatchController@index', [$events->id, $id_part])->with('info', 'Match has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_part, $id_match)
    {
        $events = Event::findOrFail($id);
        $match = Match::findOrFail($id_match);
        $match->delete();
        return redirect()->action('MatchController@index', [$events->id, $id_part])->with('danger', 'Event has been deleted');
    }

    public function autoAdd($id)
    {
        $events = Event::findOrFail($id);
        $jumlah = $event->kuota/2;
        for ($i=1; $i <= $jumlah; $i++) {
            $match = new Match();
            $match->nama = 'Match'.$i;
            $match->status = 'available';
            $match->event_id = $id;
            $user->save();
        }
        $jumlah = $

        return redirect()->action('EventMatchController@index', [$events->id])->with('success', 'Event has been created');
    }
}
