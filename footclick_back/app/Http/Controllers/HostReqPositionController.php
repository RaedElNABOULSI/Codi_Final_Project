<?php

namespace App\Http\Controllers;

use App\HostReqPositions;
use Illuminate\Http\Request;

class HostReqPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 //------------------------@start Get all requested positions for host -------------------------------------------
       $hostReqPositions = HostReqPositions::all();
        return   $hostReqPositions ;
  //------------------------@end Get all requested positions for host --------------------------------------------
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //------------------------@start Insert a host requested position-------------------------------------------
          

         $hostReqPositions= new HostReqPositions; // create a new instance of the model

         $hostReqPositions->host_id = $request->host_id; // validate host id input
         $hostReqPositions ->position_id = $request->position_id; // validate position id input
 

         $hostReqPositions->save(); // insert records to the database

      //------------------------@end  Insert a host requested position -------------------------------------------
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HostReqPositions  $hostReqPositions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //------------------------@start update a host requested position field ---------------------------------------------------
        
       $hostReqPositions = HostReqPositions::find($id); // update by id

       $host_id = $request->get('host_id'); // validate host id input
       $position_id= $request->get('position_id'); // validate position id input
       
       $hostReqPositions ->host_id= $host_id ; // assign input request to host id record in database
       $hostReqPositions ->position_id = $position_id; // assign input request to position id record in database

       $hostReqPositions->save(); // updates all fields

//------------------------@end update a host requested position field ---------------------------------------------------
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HostReqPositions  $hostReqPositions
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
//------------------------@start delete a requested host position---------------------------------------------------

   $hostReqPositions = HostReqPositions::find($id); // find requested host position by id

   $hostReqPositions->delete(); // delete a requested host position record

 //------------------------@end delete a requested host position ---------------------------------------------------
    }
}
