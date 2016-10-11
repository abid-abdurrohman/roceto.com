<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Event;
use App\Model\Category;
use App\Model\Match;
use App\Model\Match_team;
use App\Model\Match_score;
use App\Model\Member;
use App\Http\Requests;

class MatchScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, $id_match, $id_team)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $id_match, $id_team)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id, $id_match, $id_team)
    {
        $this->validate($request, [
            'member_id' => 'required',
            'score' => 'required',
        ]);
        $input = $request->all();
        $categories = Category::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $input['match_team_id'] = $id_team;
        Match_score::create($input);
        return redirect()->action('MatchTeamController@show', [$categories->id, $matches->id, $id_team])->with('success', 'Score has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_match, $id_team, $id_score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_match, $id_team, $id_score)
    {
       /* $categories = Category::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $match_teams = Match_team::findOrFail($id_team);
        $match_scores = Match_score::findOrFail($id_score);
        $members = Member::lists('nama', 'id');
        return view('admin.match_score.edit', compact('categories', 'matches', 'match_teams', 'match_scores', 'members'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_match, $id_team, $id_score)
    {
        $this->validate($request, [
            'member_id' => 'required',
            'score' => 'required',
        ]);
        $input = $request->all();
        $categories = Category::findOrFail($id);
        $matches = Match::findOrFail($id_match);
        $match_teams = Match_team::findOrFail($id_team);
        $match_scores = Match_score::findOrFail($id_score);
        $input['match_team_id'] = $id_team;
        $match_scores->update($input);
        return redirect()->action('MatchTeamController@show', [$categories->id, $matches->id, $id_team])->with('info', 'Score has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_match, $id_team, $id_score)
    {
          /*$categories = Category::findOrFail($id);
          $matches = Match::findOrFail($id_match);
          $match_teams = Match_team::findOrFail($id_team);
          $match_score = Match_score::findOrFail($id_score);
          $match_score->delete();
          return redirect()->action('MatchTeamController@show', [$categories->id, $matches->id, $id_team])->with('danger', 'Category has been deleted');*/
    }
}
