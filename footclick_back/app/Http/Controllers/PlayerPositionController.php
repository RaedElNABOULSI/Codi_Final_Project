<?php

namespace App\Http\Controllers;

use App\PlayerPositions;
use Illuminate\Http\Request;

class PlayerPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//------------------------@start Get position of all players -------------------------------------------
     $playerPositions= PlayerPositions::all();
     return   $playerPositions;
//------------------------@end Get position of all players --------------------------------------------
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//------------------------@start Insert a position for a player -------------------------------------------
          

    $playerPositions= new PlayerPositions; // create a new instance of the model

    $playerPositions  ->position_id = $request->position_id; // validate id of position input
    $playerPositions ->player_id = $request->player_id; // validate player id input
  

    $playerPositions ->save(); // insert records to the database

//------------------------@end Insert a position for a player -------------------------------------------
    }



   /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
             //------------------------@start update a player position field ---------------------------------------------------
        
             $playerPositions= PlayerPositions::find($id); // update by id

             $position_id = $request->get('position_id'); // validate position id input
             $player_id= $request->get('player_id'); // validate player id input
             
             $playerPositions ->position_id= $position_id; // assign input request to position id record in database
             $playerPositions ->player_id= $player_id; // assign input request to player id record in database
      
             $playerPositions->save(); // updates all fields
      
      //------------------------@end update a player position field ---------------------------------------------------
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlayerPositions  $playerPositions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    //------------------------@start delete a player position field ---------------------------------------------------

    $playerPositions = PlayerPositions::find($id); // find player position by id

    $playerPositions ->delete(); // delete a player position record

//------------------------@end  delete a player position field ---------------------------------------------------
    }
}
