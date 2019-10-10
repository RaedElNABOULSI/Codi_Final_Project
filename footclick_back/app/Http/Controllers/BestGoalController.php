<?php

namespace App\Http\Controllers;

use App\BestGoals;
use Illuminate\Http\Request;
/**
 * @group BestGoal Videos management
 *
 * APIs for managing bestgoal videos
 */
class BestGoalController extends Controller
{
    /**
     * Display goals
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //------------------------@start Get videos of all the best goals -------------------------------------------
           $bestGoals = BestGoals::all();
           return   $bestGoals ;
     //------------------------@end Get videos of all the best goals --------------------------------------------
    }


    /**
     * Create a new video goal
     *
     * @bodyParam  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 //------------------------@start Insert a video of all the best goals -------------------------------------------
          

     $bestGoals = new BestGoals; // create a new instance of the model

     $bestGoals  ->video = $request->video; // validate video input
    $bestGoals  ->description = $request->description; // validate description input
    $bestGoals ->player_id = $request->player_id; // validate player id input

    $bestGoals  ->save(); // insert records to the database

      //------------------------@end Insert a video of all the best goals -------------------------------------------
    }

  /**
     * Update a video goal
     *
     * @bodyParam  int  $id
     * @bodyParam  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function update($id,Request $request)
    {
         //------------------------@start update a video field ---------------------------------------------------
        
         $bestGoals  = BestGoals::find($id); // update by id

         $video = $request->get('video'); // validate video input
         $description= $request->get('description'); // validate description input
         $player_id= $request->get('player_id'); // validate player id input
 
 
         $bestGoals ->video= $video ; // assign input request to video record in database
         $bestGoals  ->description = $description; // assign input request to description record in database
         $bestGoals  ->player_id= $player_id; // assign input request to player id record in database
 
         $bestGoals ->save(); // updates all fields
 
  //------------------------@end update a video field ---------------------------------------------------
    }


    /**
     * Remove a video goal
     *
     * @bodyParam  \int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//------------------------@start delete a video field ---------------------------------------------------

        $bestGoals = BestGoals::find($id); // find video by id

        $bestGoals ->delete(); // delete a video record

 //------------------------@end delete a video field ---------------------------------------------------
    }
}
