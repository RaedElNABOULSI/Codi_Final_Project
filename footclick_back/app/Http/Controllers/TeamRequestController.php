<?php

namespace App\Http\Controllers;

use App\TeamRequests;
use Illuminate\Http\Request;
use App\User;
use App\UserHost;
use App\HostTeams;

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
    public function index(Request $request){
        //get Player footclick name
        $hostUserId=$request->get('hostUserId'); 
        $hostId= UserHost::where('user_id', $hostUserId)->value('host_id');
        $playerId = TeamRequests::where('host_id',$hostId)->value('player_id');
        $playerFname=User::where('id',$playerId)->value('footclick_name');
        // return $playerFname;
        return response(array(
            'currentUser' => $playerFname,
            'message' => 'Name of user who requested team join Successful!',
         ));
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
        // insert into 'Team_Request' table
        $teamRequests = new TeamRequests; 
        $teamRequests->status = $request->status; 
        $teamRequests->type = $request->type; 
        $teamRequests->player_id = $request->playerId; 
        $hostFootclickName = $request->hostFootclickName;
        $userId=$users = User::where('footclick_name', '=',$hostFootclickName)->value('id');
        $hostId=$users = UserHost::where('user_id', '=',$userId)->value('host_id');
        $teamRequests->host_id = $hostId;
        $teamRequests->save();     
        return response()->json([
            'currentUser' => 'user',
            'message' => 'Join team request successful!',
            ]); 
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
        // $teamRequests = TeamRequests::find($id); 
        // $status = $request->get('status'); 
        // $type= $request->get('type'); 
        // $player_id= $request->get('player_id');
        // $host_id= $request->get('host_id'); 
        // $teamRequests ->status= $status ;
        // $teamRequests ->type= $type ; 
        // $teamRequests  ->player_id = $player_id; 
        // $teamRequests->host_id= $host_id; 
        // $teamRequests->save(); 
        // $status = $request->get(' playerFname'); 
        
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
