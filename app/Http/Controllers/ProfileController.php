<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Event;
use App\Model\Participant;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $participants = Participant::join('categories', 'categories.id', '=', 'participants.category_id')->join('events', 'events.id', '=', 'categories.event_id')->select('events.nama as nama_event', 'categories.nama as nama_category', 'participants.*')->findOrFail()
        $id = Auth::user()->id;
        $users = User::findOrFail($id);
        $participants = Participant::join('events', 'events.id', '=', 'participants.event_id')
          ->select('events.nama as nama_events', 'participants.*')->where('participants.user_id', $id)->get();

        return view('profile.index', compact('participants', 'users'));

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'name' => 'required',
            'nick_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'avatar' => 'required',
            'background' => 'required',
        ]);
        $input = $request->all();
        $users = User::findOrFail($id);

        $photo = $request->avatar->getClientOriginalName();
        $destination = 'images/user/'.$request->name.'/avatar/';
        $request->avatar->move($destination, $photo);
        $input['avatar'] = $destination.$photo;
        $photo = $request->background->getClientOriginalName();
        $destination = 'images/user/'.$request->name.'/background/';
        $request->background->move($destination, $photo);
        $input['background'] = $destination.$photo;
        
        $users->update($input);
        return redirect()->action('ProfileController@index')->with('info','User has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
