<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use App\Model\Participant;
use App\Model\Category;
use App\Model\Event;
use App\Model\Member;
use App\Model\BuktiPembayaran;
use App\Model\Pemasukan;
use App\Model\User;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_event($id)
    {
        $events = Event::findOrFail($id);
        $participants = Participant::join('events', 'events.id', '=', 'participants.event_id')->where('events.id' , $id)
          ->select('events.nama as nama_event, events.id as event_id', 'participants.*')->paginate(5);
        return view('admin.participant.index', compact('participants', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /* $category = Category::lists('nama','id');
        return view('admin.participant.create', compact('category'));*/
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
            'nama_tim' => ['required'],
            'logo_tim' => ['required'],
            'no_hp' => ['required'],
            'email' => ['required'],
            'warna_kostum' => ['required'],
            'jumlah_pemain' => ['required'], 
        ]);
        $events = Event::findOrFail($id);
        $input = $request->all();
        $input['status'] = 'waiting';
        $photo = $request->logo_tim->getClientOriginalName();
        $destination = 'images/participant/';
        $request->logo_tim->move($destination, $photo);
        $input['logo_tim'] = $destination.$photo;
        $input['event_id'] = $id;
        Participant::create($input);
        return redirect()->action('ParticipantController@index')->with('success', 'Participant has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_participant)
    {
        $events = Event::findOrFail($id);
        $participants = Participant::join('events', 'events.id', '=', 'participants.event_id')
          ->select('events.nama as nama', 'events.biaya_pendaftaran as biaya_pendaftaran', 'participants.*')->findOrFail($id_participant);
        $members = Member::where('participant_id', $id_participant)->get();
        return view('admin.participant.show', compact('participants', 'members', 'events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_participant)
    {
        $events = Event::findOrFail($id);
        $participants = Participant::findOrFail($id_participant);
        return view('admin.participant.edit', compact('participants', 'events'));
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
            'nama_tim' => ['required'],
            'logo_tim' => ['required'],
            'no_hp' => ['required'],
            'email' => ['required'],
            'warna_kostum' => ['required'],
            'jumlah_pemain' => ['required'],
        ]);
        $events = Event::findOrFail($id);
        $participants = Participant::findOrFail($id_participant);
        $input = $request->all();
        $input['event_id'] = $participants->event_id;
        $photo = $request->logo_tim->getClientOriginalName();
        $destination = 'images/participant/';
        $request->logo_tim->move($destination, $photo);
        $input['logo_tim'] = $destination.$photo;
        $participants->update($input);
        return redirect()->action('ParticipantController@show', compact('events', 'participants'))->with('info','Participant has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_participant)
    {
        $events = Event::findOrFail($id);
        $participants = participant::findOrFail($id_participant);
        $participants->delete();
        return redirect()->action('ParticipantController@index')->with('danger','Participant has been deleted');
    }

    public function search(Request $request)
    {
        $events = Event::findOrFail($id);
        $temp_search = $request->get('search');
        $search = '%'.$temp_search.'%';
        $participants = DB::table('participants')
                ->where('id', 'LIKE', $search)
                ->orwhere('nama', 'LIKE', $search)
                ->orwhere('detail', 'LIKE', $search)
                ->paginate(5);

        return view('admin.participant.search', compact('participants','temp_search'));
    }

    public function validation($id, $id_participant)
    {
        $events = Event::findOrFail($id);
        $participants = participant::findOrFail($id_participant);
        $participants['status'] = 'validated';
        $participants->update();
        $input['nama'] = 'pemasukan_pendaftaran';
        $input['event_id'] = $participants->event_id;
        $input['participant_id'] = $id;
        $input['jumlah'] = $events->biaya_pendaftaran;
        Pemasukan::create($input);
        return redirect()->action('ParticipantController@bukti_pembayaran', compact('events', 'participants'))->with('info','Participant has been validated');
    }

    public function bukti_pembayaran($id, $id_participant)
    {
        $events = Event::findOrFail($id);
        $bukti_pembayaran = BuktiPembayaran::join('participants', 'participants.id', '=' , 'bukti_pembayaran.participant_id')->where('participant_id', $id_participant)->select('participants.status as status_participant', 'bukti_pembayaran.*')->first();
        $participant= Participant::findOrFail($id_participant);
        return view('admin.participant.bukti_pembayaran.formin', compact('bukti_pembayaran', 'participant', 'events'));
    }
    public function event_index()
    {
        $event_index = Event::paginate(5);
        return view('admin.participant.event_index', compact('event_index'));
    }

    public function pembayaran()
    {
        $id_user = Auth::user()->id;
        $users = User::findOrFail($id_user);
        $participants = Participant::join('events' , 'events.id', '=' , 'participants.event_id')
        ->select('events.nama as nama_event', 'events.biaya_pendaftaran as payment' , 'participants.*')->where('participants.user_id', $id_user)->get();
        $sum = Participant::join('events' , 'events.id', '=' , 'participants.event_id')->where('participants.user_id', $id_user)->select('events.nama as nama_event', 'events.biaya_pendaftaran as payment' , 'participants.*')->sum('events.biaya_pendaftaran');

        
        return view('register.pembayaran.pembayaran', compact('users', 'participants', 'sum'));

    }
    public function postPembayaran(request $request)
    {
        $id_user = Auth::user()->id;
        $users = User::findOrFail($id_user);
        
        $sum = Participant::join('events' , 'events.id', '=' , 'participants.event_id')->where('participants.user_id', $id_user)->select('events.nama as nama_event', 'events.biaya_pendaftaran as payment' , 'participants.*')->sum('events.biaya_pendaftaran');

        $users['email'] = $users->email;
        Mail::send('emails.bukti_pembayaran',
            array (
            'nama' => $users->name,
            'biaya_pendaftaran' => $sum,
                ), function($message) use($users){
            $message->to($users->email)->from('rocetomazzido@gmail.com')->subject('Welcome!');
          }
            );
        return redirect()->action('ParticipantController@pembayaran');
    }
}
