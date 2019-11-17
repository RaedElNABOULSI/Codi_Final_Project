<?php

namespace App\Http\Controllers;

use App\Positions;
use Illuminate\Http\Request;
/**
 * @group Football Position management
 *
 * APIs for managing positions
 */
class PositionController extends Controller
{
    /**
     * Display football positions
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
       $positions = Positions::all();
       return $positions;
    }
    /**
     * Create a new position
     *
     * @bodyParam  \Illuminate\Http\Request  $request
     * @bodyParam position \Illuminate\Http\Request required Position 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
       $positions = new Positions; 
       $positions->position = $request->position; 
       $positions->save(); 
    }
   /**
     * Update a position
     *
     * @bodyParam  $id  int
     * @bodyParam  \Illuminate\Http\Request  $request
     * @bodyParam position \Illuminate\Http\Request required Position 
     * @return Response
     */
    public function update($id,Request $request){
       $positions = Positions::find($id); 
       $position = $request->get('position'); 
       $positions->position = $position ;
       $positions->save(); 
    }
    /**
     * Remove a position
     *
     * @bodyParam  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
       $positions = Positions::find($id);
       $positions->delete();
    }
}
