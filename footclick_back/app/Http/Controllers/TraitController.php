<?php

namespace App\Http\Controllers;

use App\Traits;
use Illuminate\Http\Request;
/**
 * @group Trait management
 *
 * APIs for managing traits
 */
class TraitController extends Controller
{
    /**
     * Display all traits
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         $traits = Traits::all();
         return   $traits;
    }
    /**
     * Create a new football trait
     *
     * @bodyParam  $request  \Illuminate\Http\Request
     * @bodyParam  $traits  \Illuminate\Http\Request required Trait to be created
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $traits = new Traits; 
        $traits->trait = $request->trait; 
        $traits  ->save(); 
    }
   /**
     * Update a football trait
     *
     * @bodyParam  $id  int
     * @bodyParam  $request  \Illuminate\Http\Request 
     * @return Response
     */
    public function update($id,Request $request){
        $traits  = Traits::find($id); 
        $trait = $request->get('trait'); 
        $traits ->trait= $trait ; 
        $traits ->save(); 
    }
    /**
     * Remove a football trait
     *
     * @bodyParam  $id  int required Trait id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $traits=Traits::find($id); 
        $traits->delete();
    }
}
