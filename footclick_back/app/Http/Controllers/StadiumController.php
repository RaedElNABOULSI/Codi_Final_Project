<?php

namespace App\Http\Controllers;

use App\Stadiums;
use Illuminate\Http\Request;

class StadiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//------------------------@start Get all stadiums -------------------------------------------
        $stadiums = Stadiums::all();
        return      $stadiums;
//------------------------@end Get all stadiums --------------------------------------------
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//------------------------@start Insert a football stadium------------------------------------------------------
          

     $stadiums = new Stadiums; // create a new instance of the model

     $stadiums  ->name = $request->name ; // validate stadium name input
     $stadiums ->image = $request->image; // validate stadium image input
     $stadiums ->capacity = $request->capacity ; // validate stadium capacity input
     $stadiums ->region = $request->region; // validate stadium region input
     $stadiums ->price = $request->price; // validate stadium price input

    $stadiums  ->save(); // insert records to the database

//------------------------@end  Insert a football stadium -------------------------------------------
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stadiums  $stadiums
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
 //------------------------@start update a stadium field ---------------------------------------------------
        
         $stadiums = Stadiums::find($id); // update by id

         $name = $request->get('name'); // validate stadium name input
         $image= $request->get('image'); // validate stadium image input
         $capacity= $request->get('capacity'); // validate stadium capacity input
         $region= $request->get('region'); // validate stadium region input
         $price= $request->get('price'); // validate stadium price input
 
 
         $stadiums ->name= $name ; // assign input request to stadium name record in database
         $stadiums ->image= $image ; // assign input request to stadium image record in database
         $stadiums ->capacity= $capacity ; // assign input request to stadium capacity record in database
         $stadiums  ->region = $region; // assign input request to stadium region record in database
         $stadiums  ->price= $price; // assign input request to stadium price record in database
 
         $stadiums->save(); // updates all fields
 
  //------------------------@end update a stadium field ---------------------------------------------------
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stadiums  $stadiums
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //------------------------@start delete a stadium field ---------------------------------------------------

        $stadiums = Stadiums::find($id); // find stadium by id

        $stadiums ->delete(); // delete a stadium record

 //------------------------@end delete a stadium field ---------------------------------------------------
    }
}
