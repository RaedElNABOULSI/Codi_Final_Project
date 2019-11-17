<?php

namespace App\Http\Controllers;

use App\HostRequestPosition;
use Illuminate\Http\Request;

class HostRequestPositionController extends Controller
{
    /**
     * Display all hosts
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostRequestPositions = HostRequestPosition::all();
        return   $hostRequestPositions ;
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
     * @param  \App\HostRequestPosition  $hostRequestPosition
     * @return \Illuminate\Http\Response
     */
    public function show(HostRequestPosition $hostRequestPosition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HostRequestPosition  $hostRequestPosition
     * @return \Illuminate\Http\Response
     */
    public function edit(HostRequestPosition $hostRequestPosition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HostRequestPosition  $hostRequestPosition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HostRequestPosition $hostRequestPosition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HostRequestPosition  $hostRequestPosition
     * @return \Illuminate\Http\Response
     */
    public function destroy(HostRequestPosition $hostRequestPosition)
    {
        //
    }
}
