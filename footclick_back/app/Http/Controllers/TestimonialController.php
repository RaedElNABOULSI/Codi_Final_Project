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
    public function index(){
          $testimonials = Testimonials::all();
           return   $testimonials;
    }
    /**
     * Create a new testimonial
     *
     * @bodyParam  \Illuminate\Http\Request  $request
     * @bodyParam name \Illuminate\Http\Request Testimonial author
     * @bodyParam content \Illuminate\Http\Request Testimonial content
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
         $testimonials = new Testimonials; 
         $testimonials->name = $request->name; 
         $testimonials->content = $request->content; 
         $testimonials->save(); 
    }
  /**
     * Update a testimonial
     *
     * @bodyParam  int  $id
     * @bodyParam  \Illuminate\Http\Request  $request
     * @bodyParam  $name \Illuminate\Http\Request required Testimonial author
     * @bodyParam  $content \Illuminate\Http\Request required Testimonial content
     * @return Response
     */
    public function update($id,Request $request) {
        $testimonials = Testimonials ::find($id); 
        $name = $request->get('name'); 
        $content= $request->get('content'); 
        $testimonials ->name= $name ; 
        $testimonials  ->content= $content;
        $testimonials ->save(); 
    }
    /**
     * Remove a testimonial
     *
     * @bodyParam  $id  int
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $testimonials = Testimonials::find($id); // find testimonial by id
        $testimonials ->delete(); // delete a testimonial record
    }
}
