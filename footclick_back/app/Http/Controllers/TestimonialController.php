<?php

namespace App\Http\Controllers;

use App\Testimonials;
use Illuminate\Http\Request;
/**
 * @group Testimonial management
 *
 * APIs for managing testimonials
 */
class TestimonialController extends Controller
{
    /**
     * Display testimonials
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
     * Create a new testimonial
     *
     * @bodyParam  \Illuminate\Http\Request  $request
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
     * Update a testimonial
     *
     * @bodyParam  int  $id
     * @bodyParam  \Illuminate\Http\Request  $request
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
     * Remove a testimonial
     *
     * @bodyParam  int  $id
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
