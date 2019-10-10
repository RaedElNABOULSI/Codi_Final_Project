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
     * Display a trait
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//------------------------@start Get all traits -------------------------------------------
         $traits = Traits::all();
         return   $traits;
//------------------------@end Get all traits --------------------------------------------
    }


    /**
     * Create a new football trait
     *
     * @bodyParam  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//------------------------@start Insert a trait ---------------------------------------------------------
          

     $traits = new Traits; // create a new instance of the model

     $traits  ->trait = $request->trait; // validate trait input

    $traits  ->save(); // insert records to the database

//------------------------@end Insert a trait ----------------------------------------------------------
    }


   /**
     * Update a football trait
     *
     * @bodyParam  int  $id
     * @bodyParam  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function update($id,Request $request)
    {
     //------------------------@start update a trait field ---------------------------------------------------
        
     $traits  = Traits::find($id); // update by id

     $trait = $request->get('trait'); // validate trait input
    
     $traits ->trait= $trait ; // assign input request to trait record in database

     $traits ->save(); // updates all fields

//------------------------@end update a trait field ---------------------------------------------------
    }

    /**
     * Remove a football trait
     *
     * @bodyParam  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//------------------------@start delete a trait field ---------------------------------------------------

        $traits=Traits::find($id); //  // find trait by id

        $traits->delete(); // delete a trait record

//------------------------@start delete a trait field ---------------------------------------------------
    }
}
