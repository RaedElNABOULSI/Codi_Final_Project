<?php

namespace App\Http\Controllers;

use App\Testimonials;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//------------------------@start Get all testimonials -------------------------------------------

          $testimonials = Testimonials::all();
           return   $testimonials;
       
//------------------------@end Get all testimonials --------------------------------------------
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //------------------------@start Insert a testimonial -------------------------------------------
          

         $testimonials= new Testimonials; // create a new instance of the model

         $testimonials  ->name = $request->name; // validate testimonial name input
         $testimonials  ->content = $request->content; // validate content name input
    

         $testimonials  ->save(); // insert records to the database

      //------------------------@end Insert a testimonial-------------------------------------------
    }

  
  /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
//------------------------@start update a testimonial field ---------------------------------------------------
        
        $testimonials = Testimonials ::find($id); // update by id

        $name = $request->get('name'); // validate testimonial name input
        $content= $request->get('content'); // validate testimonial content input
       
        $testimonials ->name= $name ; // assign input request to testimonial name record in database
        $testimonials  ->content= $content; // assign input request to testimonial content record in database

        $testimonials ->save(); // updates all fields

 //------------------------@end update a testimonial field--------- ---------------------------------------------------
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonials  $testimonials
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//------------------------@start delete a testimonial field ---------------------------------------------------

        $testimonials = Testimonials::find($id); // find testimonial by id

        $testimonials ->delete(); // delete a testimonial record

 //------------------------@end delete a testimonial field ---------------------------------------------------
    }
}
