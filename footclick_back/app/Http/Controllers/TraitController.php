<?php

namespace App\Http\Controllers;

use App\Traits;
use Illuminate\Http\Request;

class TraitController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Traits  $traits
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//------------------------@start update a trait field ---------------------------------------------------
        
         $traits  = Traits::find($id); // update by id

         $trait = $request->get('trait'); // validate trait input
        
         $traits ->trait= $trait ; // assign input request to trait record in database
    
         $traits ->save(); // updates all fields
 
  //------------------------@end update a trait field ---------------------------------------------------
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Traits  $traits
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
