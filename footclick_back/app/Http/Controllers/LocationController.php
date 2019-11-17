<?php

namespace App\Http\Controllers;

use App\Locations;
use Illuminate\Http\Request;
/**
 * @group Location management
 *
 * APIs for managing locations
 */
class LocationController extends Controller
{
    /**
     * Display all Locations
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $locations = Locations::all();
        return   $locations;
    }
    /**
     * Store a new location
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display a location
     *
     * @param  \App\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function show(Locations $locations)
    {
        //
    }
    /**
     * Update a location
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locations $locations)
    {
        //
    }

    /**
     * Remove a location
     *
     * @param  \App\Locations  $locations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locations $locations)
    {
        //
    }
}
