<?php

namespace App\Http\Controllers;

use App\MatchRequests;
use Illuminate\Http\Request;

class MatchRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //------------------------@start Get all match requests -------------------------------------------
          $matchRequests = MatchRequests::all();
          return   $matchRequests ;
    //------------------------@end Get all match requests  --------------------------------------------
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//------------------------@start Insert a match request -------------------------------------------
          

    $matchRequests = new MatchRequests; // create a new instance of the model

    $matchRequests ->status = $request->status; // validate status input
    $matchRequests ->req_host_id = $request->req_host_id ; // validate id of host requested input
    $matchRequests->ack_host_id = $request->ack_host_id; // validate id of host acknowleged input
    $matchRequests->winning_host_id = $request->winning_host_id; // validate winning host id input

    $matchRequests ->save(); // insert records to the database

//------------------------@end Insert a match request -------------------------------------------
    }




   /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //------------------------@start update a match request field ---------------------------------------------------
        
        $matchRequests = MatchRequests::find($id); // update by id

        $status = $request->get('status'); // validate status input
        $req_host_id= $request->get('req_host_id'); // validate requested host id input
        $ack_host_id= $request->get('ack_host_id'); // validate acknowledged host id input
        $winning_host_id= $request->get('winning_host_id'); // validate winning host id input


        $matchRequests  ->status= $status ; // assign input request to status record in database
        $matchRequests ->req_host_id = $req_host_id ; // assign input request to requested host id record in database
        $matchRequests  ->ack_host_id = $ack_host_id; // assign input request to acknowledged host id record in database
        $matchRequests  ->winning_host_id= $winning_host_id; // assign input request to winning host id record in database

        $matchRequests ->save();  // updates all fields

 //------------------------@end update a match request field ---------------------------------------------------
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MatchRequests  $matchRequests
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//------------------------@start delete a match request field ---------------------------------------------------

$matchRequests = MatchRequests::find($id); // find match request by id

$matchRequests ->delete(); // delete a match request record

//------------------------@end delete a match request field ---------------------------------------------------
    }
}
