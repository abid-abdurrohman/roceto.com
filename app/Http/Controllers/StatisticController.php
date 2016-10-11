<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Event;
use App\Model\Statistic;
use App\Model\Rank;
use App\Http\Requests;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'participant_id' => 'required',
            'rank_id' => 'required',
        ]);
        $input = $request->all();
        $events = Event::findOrFail($id);
        Statistic::create($input);
        return redirect()->action('EventStatisticController@show', [$events->id])->with('success', 'Match has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_statistic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_statistic)
    {
        $events = Event::findOrFail($id);
        $statistics = Statistic::findOrFail($id_statistic);
        $participants = Participant::where('event_id', $id)->lists('nama_tim', 'id');
        $ranks = Rank::lists('title', 'id');
        return view('admin.statistic.edit', compact('events', 'statistics', 'participants', 'ranks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_statistic)
    {
        $this->validate($request, [
            'participant_id' => 'required',
            'rank_id' => 'required',
        ]);
        $input = $request->all();
        $events = Event::findOrFail($id);
        $statistics = Statistic::findOrFail($id_statistic);
        $statistics->update($input);
        return redirect()->action('EventStatisticController@show', [$events->id])->with('info', 'Statistic has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_statistic)
    {
        $events = Event::findOrFail($id);
        $statistics = Statistic::findOrFail($id_statistic);
        $statistics->delete();
        return redirect()->action('EventStatisticController@show', [$events->id])->with('danger', 'Statistics has been deleted');
    }
}
