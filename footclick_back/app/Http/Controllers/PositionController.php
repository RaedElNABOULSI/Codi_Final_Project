<?php

namespace App\Http\Controllers;

use App\Positions;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //------------------------@start Get football position -------------------------------------------
           $positions = Positions::all();
           return   $positions ;
     //------------------------@end Get football position --------------------------------------------
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 //------------------------@start Insert a football position -------------------------------------------
          

        $positions = new Positions; // create a new instance of the model

        $positions->position = $request->position; // validate position input
   
        $positions->save(); // insert records to the database

 //------------------------@end Insert a football position -------------------------------------------
    }



   /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
           //------------------------@start update a football position field ---------------------------------------------------
        
           $positions = Positions::find($id); // update by id

           $position = $request->get('position'); // validate position input
         
           $positions  ->position= $position ; // assign input request to position record in database
   
           $positions ->save(); // updates all fields
   
    //------------------------@end update a football position field  ---------------------------------------------------
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Positions  $positions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//------------------------@start delete a position field ---------------------------------------------------

  $positions = Positions::find($id); // find position by id

  $positions->delete(); // delete a position record

//------------------------@end delete a position field ---------------------------------------------------
    }
}
