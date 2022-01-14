<?php

namespace App\Http\Controllers;

use App\Models\Fragebogen;
use Illuminate\Http\Request;

class FragebogenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fragebogen.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fragebogen.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fragebogen = new Fragebogen;
        $fragebogen->name = $request->input('name');
        $fragebogen->old = $request->input('old');
        $fragebogen->vdm = $request->input('vdm');
        $fragebogen->rdm = $request->input('rdm');
        $fragebogen->srp = $request->input('srp');
        $fragebogen->roleplay = $request->input('roleplay');
        $fragebogen->save();
        return redirect()->back()->with('status','Whitelist Fragebogen wurde erfolgreich abgesendet.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fragebogen  $fragebogen
     * @return \Illuminate\Http\Response
     */
    public function show(Fragebogen $fragebogen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fragebogen  $fragebogen
     * @return \Illuminate\Http\Response
     */
    public function edit(Fragebogen $fragebogen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fragebogen  $fragebogen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fragebogen $fragebogen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fragebogen  $fragebogen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fragebogen $fragebogen)
    {
        //
    }
}
