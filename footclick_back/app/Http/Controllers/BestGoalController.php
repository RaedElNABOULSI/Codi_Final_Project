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
    public function index(){
      $bestGoals = BestGoals::all();
      return   $bestGoals ;
    }


    /**
     * Create a new video goal
     *
     * @bodyParam  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      $bestGoals = new BestGoals; 
      $bestGoals  ->video = $request->video; 
      $bestGoals  ->description = $request->description; 
      $bestGoals ->player_id = $request->player_id; 
      $bestGoals  ->save(); 
    }
  /**
     * Update a video goal
     *
     * @bodyParam  int  $id
     * @bodyParam  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function update($id,Request $request){
      $bestGoals  = BestGoals::find($id); 
      $video = $request->get('video'); 
      $description= $request->get('description'); 
      $player_id= $request->get('player_id'); 
      $bestGoals ->video= $video ; 
      $bestGoals  ->description = $description; 
      $bestGoals  ->player_id= $player_id; 
    }
    /**
     * Remove a video goal
     *
     * @bodyParam  \int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
      $bestGoals = BestGoals::find($id); 
      $bestGoals ->delete(); 
    }
}
