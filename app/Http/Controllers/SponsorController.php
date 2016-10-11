<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Sponsor;
use App\Http\Requests;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = Sponsor::paginate(5);
        return view('admin.sponsor.index', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sponsors = Sponsor::all();
        return view('admin.sponsor.create', compact('sponsors'));
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
            'nama_pt' => 'required',
            'alamat_pt' => 'required',
            'no_hp_pt' => 'required',
            'email_pt' => 'required',
            'website_pt' => 'required',
            'foto_pt' => 'required',
            'nama_cp' => 'required',
            'job_title_cp' => 'required',
            'no_hp_cp' => 'required',
            'email_cp' => 'required',
        ]);
        $input = $request->all();
        $photo = $request->foto_pt->getClientOriginalName();
        $destination = 'images/sponsor/';
        $request->foto_pt->move($destination, $photo);

        $input['foto_pt'] = $destination.$photo;
        Sponsor::create($input);
        return redirect()->action('SponsorController@index')->with('success', 'Sponsor has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return view('admin.sponsor.show', compact('sponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sponsors = Sponsor::findOrFail($id);
        return view('admin.sponsor.edit', compact('sponsors'));
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
            'nama_pt' => 'required',
            'alamat_pt' => 'required',
            'no_hp_pt' => 'required',
            'email_pt' => 'required',
            'website_pt' => 'required',
            'foto_pt' => 'required',
            'nama_cp' => 'required',
            'job_title_cp' => 'required',
            'no_hp_cp' => 'required',
            'email_cp' => 'required',
        ]);
        $input = $request->all();
        $sponsor = Sponsor::findOrFail($id);
        $photo = $request->foto_pt->getClientOriginalName();
        $destination = 'images/sponsor/';
        $request->foto_pt->move($destination, $photo);

        $input['foto_pt'] = $destination.$photo;
        $sponsor->update($input);
        return redirect()->action('SponsorController@index')->with('info', 'Sponsor has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sponsors = Sponsor::findOrFail($id);
        $sponsors->delete();
        return redirect()->action('SponsorController@index')->with('danger','Sponsor has been deleted');
    }
}
