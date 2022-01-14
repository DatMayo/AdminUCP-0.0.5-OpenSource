<?php

namespace App\Http\Controllers;

use App\Models\Fahrzeug;
use Illuminate\Http\Request;

class FahrzeugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fahrzeug = Fahrzeug::all();
        return view('fahrzeug.index', compact('fahrzeug'));
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
     * @param  \App\Models\Fahrzeug  $fahrzeug
     * @return \Illuminate\Http\Response
     */
    public function show(Fahrzeug $fahrzeug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fahrzeug  $fahrzeug
     * @return \Illuminate\Http\Response
     */
    public function edit(Fahrzeug $fahrzeug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fahrzeug  $fahrzeug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fahrzeug $fahrzeug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fahrzeug  $fahrzeug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fahrzeug $fahrzeug)
    {
        //
    }
}
