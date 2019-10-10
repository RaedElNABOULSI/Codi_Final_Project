<?php

namespace App\Http\Controllers;

use App\PlayerTrait;
use Illuminate\Http\Request;

class PlayerTraitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//------------------------@start Get all player traits -------------------------------------------

        $playerTrait= PlayerTrait::all();
        return   $playerTrait;

 //------------------------@end Get all player traits --------------------------------------------
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//------------------------@start Insert a player trait -------------------------------------------
          

     $playerTrait = new PlayerTrait; // create a new instance of the model

     $playerTrait ->player_id = $request->player_id ; // validate player id input
     $playerTrait ->trait_id = $request->trait_id ; // validate trait id input


     $playerTrait ->save(); // insert records to the database

 //------------------------@end Insert a player trait-------------------------------------------
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //------------------------@start update a player trait field ---------------------------------------------------
        
       $playerTrait = PlayerTrait::find($id); // update by id

       $player_id= $request->get('player_id'); // validate player id input
       $trait_id= $request->get('trait_id'); // validate trait id input

       $playerTrait ->player_id= $player_id ; // assign input request to player id record in database
       $playerTrait ->trait_id= $player_id; // assign input request to trait id record in database

       $playerTrait->save(); // updates all fields

//------------------------@end update a player trait field ---------------------------------------------------
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PlayerTrait  $playerTrait
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//------------------------@start delete a player trait field ---------------------------------------------------

  $playerTrait= PlayerTrait::find($id); // find player trait by id

  $playerTrait ->delete(); // delete a player trait record

//------------------------@end delete a player trait field ---------------------------------------------------
    }
}
