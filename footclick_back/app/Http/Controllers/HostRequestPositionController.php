<?php

namespace App\Http\Controllers;

use App\HostRequestPosition;
use Illuminate\Http\Request;
/**
 * @group Host requested position relations management
 *
 * APIs for managing Host requested position relations
 */
class HostRequestPositionController extends Controller
{
    /**
     * Display all host requested positions
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $hostRequestPositions = HostRequestPosition::all();
        return   $hostRequestPositions ;
    }
    /**
     * Store a new host requested position
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
