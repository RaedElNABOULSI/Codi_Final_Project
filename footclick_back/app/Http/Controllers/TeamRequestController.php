<?php

namespace App\Http\Controllers;

use App\TeamRequests;
use Illuminate\Http\Request;

/**
 * @group Team Requests management
 *
 * APIs for managing team requests
 */
class TeamRequestController extends Controller
{
    /**
     * Display team requests
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $teamRequests = TeamRequests::all();
        return   $teamRequests ;
    }
    /**
     * Create a new team request
     *
     * @param  \Illuminate\Http\Request  $request
     * @bodyParam status \Illuminate\Http\Request required Request status
     * @bodyParam type \Illuminate\Http\Request required Request type
     * @bodyParam player_id \Illuminate\Http\Request required Request Player requested id
     * @bodyParam host_id \Illuminate\Http\Request required Request Host id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $teamRequests = new TeamRequests; 
        $teamRequests->status = $request->status; 
        $teamRequests->type = $request->type; 
        $teamRequests->player_id = $request->player_id; 
        $teamRequests->host_id = $request->host_id;
        $teamRequests->save();      
    }
   /**
     * Update a team request
     *
     * @param  int  $id
     * @bodyParam status \Illuminate\Http\Request required Request status
     * @bodyParam type \Illuminate\Http\Request required Request type
     * @bodyParam player_id \Illuminate\Http\Request required Request Player requested id
     * @bodyParam host_id \Illuminate\Http\Request required Request Host id
     * @return Response
     */
    public function update($id,Request $request){
        $teamRequests = TeamRequests::find($id); 
        $status = $request->get('status'); 
        $type= $request->get('type'); 
        $player_id= $request->get('player_id');
        $host_id= $request->get('host_id'); 
        $teamRequests ->status= $status ;
        $teamRequests ->type= $type ; 
        $teamRequests  ->player_id = $player_id; 
        $teamRequests->host_id= $host_id; 
        $teamRequests->save(); 
    }
    /**
     * Remove a team request
     *
     * @param  \App\TeamRequests  $teamRequests
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $teamRequests= TeamRequests ::find($id); 
        $teamRequests ->delete(); 
    }
}
