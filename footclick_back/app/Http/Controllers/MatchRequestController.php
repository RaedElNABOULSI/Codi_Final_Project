<?php

namespace App\Http\Controllers;

use App\MatchRequests;
use Illuminate\Http\Request;
/**
 * @group Player Match Request management
 *
 * APIs for managing match requests
 */
class MatchRequestController extends Controller
{
    /**
     * Display a match request
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $matchRequests = MatchRequests::all();
        return   $matchRequests ;
    }
    /**
     * Store a new match request
     *
     * @param  \Illuminate\Http\Request  $request 
     * @bodyParam status \Illuminate\Http\Request required Match request status
     * @bodyParam req_host_id \Illuminate\Http\Request required Match request Requested user id
     * @bodyParam ack_host_id \Illuminate\Http\Request required Match request acknowledged user id
     * @bodyParam winning_host_id \Illuminate\Http\Request required Match request status winning user id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $matchRequests = new MatchRequests; 
        $matchRequests->status = $request->status;
        $matchRequests->req_host_id = $request->req_host_id ;
        $matchRequests->ack_host_id = $request->ack_host_id; 
        $matchRequests->winning_host_id = $request->winning_host_id; 
        $matchRequests->save(); 
    }
   /**
     * Update a match request
     *
     * @param  int  $id
     * @bodyParam status \Illuminate\Http\Request required Match request status
     * @bodyParam req_host_id \Illuminate\Http\Request required Match request Requested user id
     * @bodyParam ack_host_id \Illuminate\Http\Request required Match request acknowledged user id
     * @bodyParam winning_host_id \Illuminate\Http\Request required Match request status winning user id
     * @return Response
     */
    public function update($id,Request $request){
        $matchRequests = MatchRequests::find($id); 
        $status = $request->get('status'); 
        $req_host_id= $request->get('req_host_id'); 
        $ack_host_id= $request->get('ack_host_id'); 
        $winning_host_id= $request->get('winning_host_id'); 
        $matchRequests  ->status= $status ;
        $matchRequests ->req_host_id = $req_host_id ; 
        $matchRequests  ->ack_host_id = $ack_host_id; 
        $matchRequests  ->winning_host_id= $winning_host_id; 
        $matchRequests ->save();  
    }
    /**
     * Remove a match request
     *
     * @param  \App\MatchRequests  $matchRequests
     * @param  $id int
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $matchRequests = MatchRequests::find($id); 
        $matchRequests ->delete(); 
    }
}
