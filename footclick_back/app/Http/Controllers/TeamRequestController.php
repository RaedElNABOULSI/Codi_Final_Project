<?php

namespace App\Http\Controllers;

use App\TeamRequests;
use Illuminate\Http\Request;

class TeamRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //------------------------@start Get all team requests -------------------------------------------
          $teamRequests = TeamRequests::all();
          return   $teamRequests ;
    //------------------------@end Get all team requests ------------------------------------------------
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//------------------------@start Insert a team request -------------------------------------------------------------
          

    $teamRequests = new TeamRequests; // create a new instance of the model

    $teamRequests  ->status = $request->status; // validate team request status input
    $teamRequests  ->type = $request->type; // validate teamrequest type input
    $teamRequests->player_id = $request->player_id; // validate player id input
    $teamRequests->host_id = $request->host_id; // validate host id input

    $teamRequests->save(); // insert records to the database

//------------------------@end Insert a team request ---------------------------------------------------------------
    }

 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeamRequests  $teamRequests
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//------------------------@start update a teamrequest field ---------------------------------------------------
        
         $teamRequests = TeamRequests::find($id); // update by id

         $status = $request->get('status'); // validate teamrequest status input
         $type= $request->get('type'); // validate teamrequest type input
         $player_id= $request->get('player_id'); // validate player id input
         $host_id= $request->get('host_id'); // validate host id input
 
 
         $teamRequests ->status= $status ; // assign input request to teamrequest status record in database
         $teamRequests ->type= $type ; // assign input request to teamrequest type record in database
         $teamRequests  ->player_id = $player_id; // assign input request to player id record in database
         $teamRequests->host_id= $host_id; // assign input request to host id record in database
 
         $teamRequests->save(); // updates all fields
 
  //------------------------@end update a teamrequest field ---------------------------------------------------
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeamRequests  $teamRequests
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//------------------------@start delete a teamrequest field ---------------------------------------------------

$teamRequests= TeamRequests ::find($id); // find teamrequest by id

$teamRequests ->delete(); // delete a teamrequest record

//------------------------@end delete a teamrequest field ---------------------------------------------------
    }
}
