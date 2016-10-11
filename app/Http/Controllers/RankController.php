<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Rank;
use App\Http\Requests;

class RankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ranks = Rank::paginate(5);
        return view('admin.rank.index', compact('ranks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ranks = Rank::all();
        return view('admin.rank.create', compact('ranks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'deskripsi' => 'required',
            'point' => 'required',
        ]);
        $input = $request->all();
        Rank::create($input);
        return redirect()->action('RankController@index')->with('success', 'Rank has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rank = Rank::findOrFail($id);
        return view('admin.rank.show', compact('rank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ranks = Rank::findOrFail($id);
        return view('admin.rank.edit', compact('ranks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'deskripsi' => 'required',
            'point' => 'required',
        ]);
        $input = $request->all();
        $rank = Rank::findOrFail($id);
        $rank->update($input);
        return redirect()->action('RankController@index')->with('info', 'Rank has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ranks = Rank::findOrFail($id);
        $ranks->delete();
        return redirect()->action('RankController@index')->with('danger','Rank has been deleted');
    }
}
