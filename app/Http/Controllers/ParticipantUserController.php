<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Participant;
use App\Model\Member;
use App\Model\Event;

class ParticipantUserController extends Controller
{
		public function index($id)
    {
        $participants = Participant::findOrFail($id);
				$events = Event::findOrfail($participants->event_id);
				$jml_member = Member::where('participant_id',$id)->count();
        return view('participant.index', compact('participants', 'jml_member', 'events'));
    }

    public function update($id, Request $request)
    {
    	 /*$this->validate($request, [
            'nama_tim' => ['required'],
            'no_hp' => ['required'],
            'email' => ['required'],
            'warna_kostum' => ['required'],
            'jumlah_pemain' => ['required'],
        ]);
    	$input = $request->all();
        $participants = Participant::findOrFail($id);
        $input['category_id'] = $request->id;
        $participants->update($input);
        return redirect()->action('ParticipantUserController@index',$id)->with('info','Participant has been edited');*/
    }

}
