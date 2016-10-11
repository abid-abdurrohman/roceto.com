<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Member;
use App\Model\Event;
use App\Http\Requests;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, $id_participant)
    {
        $events = Event::findOrFail($id);
        $participant = Participant::findOrFail($id_participant);
        return view('admin.member.index', compact('participant', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $id_participant)
    {
        $events = Event::findOrFail($id);
        $participant = Participant::findOrFail($id_participant);
        return view('admin.member.create', compact('participant', 'events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, $id_participant, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',            
            'jk' => 'required',
            'tgl_lhr' => 'required',
            'no_hp' => 'required',
            'posisi' => 'required',
            'no_punggung' => 'required',
            'foto' => 'required'
        ]);
        $input = $request->all();
        $events = Event::findOrFail($id);
        $participant = Participant::findOrFail($id_participant);
        $photo = $request->foto->getClientOriginalName();
        $destination = 'images/player/'.$participant->id.'/';
        $request->foto->move($destination, $photo);

        $input['participant_id'] = $participant->id;
        $input['foto'] = $destination.$photo;
        Member::create($input);
        return redirect()->action('ParticipantController@show', [$events->id, $participant->id])->with('success', 'Member has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_participant, $id_member)
    {
        $events = Event::findOrFail($id);
        $participant = Participant::findOrFail($id_participant);
        $member = Member::findOrFail($id_member);
        return view('admin.member.show', compact('participant', 'member', 'events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_participant, $id_member)
    {
        $events = Event::findOrFail($id);
        $participant = Participant::findOrFail($id_participant);
        $member = Member::findOrFail($id_member);
        return view('admin.member.edit', compact('participant', 'member', 'events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_participant, $id_member)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jk' => 'required',
            'tgl_lhr' => 'required',
            'no_hp' => 'required',
            'posisi' => 'required',
            'no_punggung' => 'required',
            'foto' => 'required'
        ]);
        $events = Event::findOrFail($id);
        $participant = Participant::findOrFail($id_participant);
        $member = Member::findOrFail($id_member);
        $input = $request->all();
        $photo = $request->foto->getClientOriginalName();
        $destination = 'images/player/'.$participant->id.'/';
        $request->foto->move($destination, $photo);
        $input['foto'] = $destination.$photo;
        $member->update($input);
        return redirect()->action('ParticipantController@show', [$events->id, $participant->id])->with('info', 'Member has been edited');

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_participant, $id_member)
    {
        $events = Event::findOrFail($id);
        $participant = Participant::findOrFail($id_participant);
        $member = Member::findOrFail($id_member);
        $member->delete();
        return redirect()->action('ParticipantController@show', [$events->id, $participant->id])->with('danger', 'Member has been deleted');
    }
}
