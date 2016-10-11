<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Participant;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.user.index', compact('users'));
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
        $this->validate($request, [
            'name' => 'required',
            'nick_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'avatar' => 'required',
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        User::create($input);
        return redirect()->action('UserAdminController@index')->with('success', 'User has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $participants = Participant::join('events', 'events.id', '=', 'participants.event_id')
        ->where('participants.user_id', $id)->select('events.nama as nama_event', 'participants.*')->get();
        return view('admin.user.show', compact('user', 'participants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.user.edit', compact('users'));
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
            'password' => 'required',
            'avatar' => 'required',
        ]);
        $users = User::findOrFail($id);
        $users->update($request->all());

        $photo = $request->avatar->getClientOriginalName();
        $destination = 'images/user/'.$request->name.'/avatar/';
        $request->avatar->move($destination, $photo);
        $input['avatar'] = $destination.$photo;

        $users->update($input);
        return redirect()->action('UserAdminController@index')->with('info','User has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->action('UserAdminController@index')->with('danger','User has been deleted');
    }
}
