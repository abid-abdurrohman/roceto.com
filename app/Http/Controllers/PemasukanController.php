<?php

namespace App\Http\Controllers;

use App\Model\Pemasukan;
use Illuminate\Http\Request;
use App\Http\Requests;

class PemasukanController extends Controller
{
    public function index()
    {
    	$pemasukan = Pemasukan::join('events', 'events.id', '=', 'pemasukan.event_id')->join('participants', 'participants.id', '=', 'pemasukan.participant_id')
    	->select('events.nama as nama_event', 'participants.id as participant_id', 'pemasukan.*')->get();
    	$sum = Pemasukan::sum('jumlah');
    	return view ('admin.pemasukan.notification.index', compact('pemasukan', 'events', 'participants','sum'));
    }

    public function getPemasukan()
    {
    	$pemasukan = Pemasukan::all();
    	return Datatables::of($pemasukan)->make(true);
    }

     public function create()
    {
        return view('admin.pemasukan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'participant_id' => 'required',
            'event_id' => 'required',
            'jumlah' => 'required',
        ]);
        $input = $request->all();
        Pemasukan::create($input);
        return redirect()->action('PemasukanController@index')->with('success', 'Pemasukan has been created');
    }

     public function show($id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        return view('admin.pemasukan.show', compact('pemasukan'));
    }

     public function edit($id)
    {
        $pemasukan = Pemasukan::findOrFail($id);

        return view('admin.pemasukan.edit', compact('pemasukan'));
    }

}
