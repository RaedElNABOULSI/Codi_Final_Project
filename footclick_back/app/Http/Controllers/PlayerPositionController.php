<?php

namespace App\Http\Controllers;

use App\PlayerPositions;
use Illuminate\Http\Request;
/**
 * @group Player Position relation management
 *
 * APIs for managing player position relations
 */
class PlayerPositionController extends Controller
{
    /**
     * Display a player position relation
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $playerPositions= PlayerPositions::all();
        return   $playerPositions;
    }
    /**
     * Store a new player position relation
     *
     * @param  \Illuminate\Http\Request  $request
     * @bodyParam position_id \Illuminate\Http\Request required Position id
     * @bodyParam player_id \Illuminate\Http\Request required Player id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $playerPositions= new PlayerPositions; 
        $playerPositions->position_id = $request->position_id; 
        $playerPositions->player_id = $request->player_id;
        $playerPositions->save();
    }
   /**
     * Update a player position relation
     *
     * @param  int  $id
     * @bodyParam position_id \Illuminate\Http\Request required Position id
     * @bodyParam player_id \Illuminate\Http\Request required Player id
     * @return Response
     */
    public function update($id,Request $request){
        $playerPositions= PlayerPositions::find($id); 
        $position_id = $request->get('position_id'); 
        $player_id= $request->get('player_id'); 
        $playerPositions ->position_id= $position_id; 
        $playerPositions ->player_id= $player_id; 
        $playerPositions->save(); 
    }
    /**
     * Remove a player position relation
     *
     * @param  \App\PlayerPositions  $playerPositions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $playerPositions = PlayerPositions::find($id);
        $playerPositions ->delete(); 
    }
}
