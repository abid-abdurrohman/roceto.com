<?php

namespace App\Http\Controllers;

use App\Model\Event;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Yajra\Datatables\Datatables;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $events = Event::latest('created_at')->paginate(5);
        $events = Event::paginate(5);
        // $events = Event::all()->take(10);
        return view('admin.event.index', compact('events'));
    }

    public function getEvent()
    {
    	  $events = Event::all();
    	  return Datatables::of($events)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
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
            'nama' => 'required',
            'detail' => 'required',
            'thumbnail' => 'required',
            'peraturan' => 'required',
            'biaya_pendaftaran' => 'required',
            'kuota' => 'required'
        ]);
        $input = $request->all();
        $photo = $request->thumbnail->getClientOriginalName();
        $destination = 'images/events/';
        $request->thumbnail->move($destination, $photo);
        $input['thumbnail'] = $destination.$photo;
        Event::create($input);
        return redirect()->action('EventController@index')->with('success', 'Event has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = Event::findOrFail($id);
        return view('admin.event.show', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::findOrFail($id);

        return view('admin.event.edit', compact('events'));
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
            'nama' => 'required',
            'detail' => 'required',
            'thumbnail' => 'required',
            'peraturan' => 'required',
            'biaya_pendaftaran' => 'required',
            'kuota' => 'required',
        ]);
        $events = Event::findOrFail($id);
        $input = $request->all();
        $photo = $request->thumbnail->getClientOriginalName();
        $destination = 'images/events/';
        $request->thumbnail->move($destination, $photo);
        $input['thumbnail'] = $destination.$photo;
        $events->update($input);
        return redirect()->action('EventController@index')->with('info','Event has been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::findOrFail($id);
        $events->delete();
        return redirect()->action('EventController@index')->with('danger','Event has been deleted');
    }

    public function search(Request $request)
    {
        $temp_search = $request->get('search');
        $search = '%'.$temp_search.'%';
        $events = DB::table('events')
                ->where('id', 'LIKE', $search)
                ->orwhere('nama', 'LIKE', $search)
                ->orwhere('detail', 'LIKE', $search)
                ->paginate(5);

        return view('admin.event.search', compact('events','temp_search'));
    }
}
