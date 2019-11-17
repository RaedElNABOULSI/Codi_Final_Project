<?php

namespace App\Http\Controllers;

use App\PlayerTrait;
use Illuminate\Http\Request;
/**
 * @group Player Trait relation management
 *
 * APIs for managing player trait relations
 */
class PlayerTraitController extends Controller
{
    /**
     * Display a playerTrait
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $playerTrait= PlayerTrait::all();
        return   $playerTrait;
    }
    /**
     * Store a new playerTrait
     *
     * @param  \Illuminate\Http\Request  $request
     * @bodyParam player_id \Illuminate\Http\Request required Player id
     * @bodyParam trait_id \Illuminate\Http\Request required Trait id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $playerTrait = new PlayerTrait; 
        $playerTrait->player_id = $request->player_id ; 
        $playerTrait->trait_id = $request->trait_id ; 
        $playerTrait->save(); 
    }
     /**
     * Update a playerTrait
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request){
        $playerTrait = PlayerTrait::find($id); 
        $player_id= $request->get('player_id'); 
        $trait_id= $request->get('trait_id'); 
        $playerTrait ->player_id= $player_id ; 
        $playerTrait ->trait_id= $player_id; 
        $playerTrait->save(); 
    }
    /**
     * Remove a playerTrait
     *
     * @param  \App\PlayerTrait  $playerTrait
     * @param  $id int
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $playerTrait= PlayerTrait::find($id); 
        $playerTrait ->delete(); 
    }
}
