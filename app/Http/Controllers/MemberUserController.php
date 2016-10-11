<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Member;
use App\Http\Requests;

class MemberUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $participants = Participant::findOrfails($id);
        return view('participant.index', compact('participants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

       public function store($id, Request $request)
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
            $participant = Participant::findOrFail($id);
            $photo = $request->foto->getClientOriginalName();
            $destination = 'images/player/'.$participant->id.'/';
            $request->foto->move($destination, $photo);

            $input['participant_id'] = $participant->id;
            $input['foto'] = $destination.$photo;
            Member::create($input);
            return redirect()->action('ParticipantUserController@index', $participant->id)->with('success', 'Member has been created');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participant = Participant::findOrFail($id);
        $member = Member::findOrFail($id_member);
        return view('participant.index', compact('participant', 'member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participant = Participant::findOrFail($id);
        $member = Member::findOrFail($id_member);
        return view('participant.modal.edit', compact('participant', 'member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_member)
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
        $participant = Participant::findOrFail($id);
        $member = Member::findOrFail($id_member);
        $input = $request->all();
        $photo = $request->foto->getClientOriginalName();
        $destination = 'images/player/'.$participant->id.'/';
        $request->foto->move($destination, $photo);
        $input['foto'] = $destination.$photo;
        $member->update($input);
        return redirect()->action('ParticipantUserController@index', [$participant->id])->with('info', 'Member has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_member)
    {
        $participant = Participant::findOrFail($id);
        $member = Member::findOrFail($id_member);
        $member->delete();
        return redirect()->action('ParticipantUserController@index', $participant->id)->with('danger', 'Member has been deleted');
    }
}
