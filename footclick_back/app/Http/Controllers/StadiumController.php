<?php

namespace App\Http\Controllers;

use App\Stadiums;
use Illuminate\Http\Request;
/**
 * @group Stadium management
 *
 * APIs for managing stadiums
 */
class StadiumController extends Controller
{
    /**
     * Display stadiums
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $stadiums = Stadiums::all();
        return $stadiums;
    }
    /**
     * Create a new stadium
     *
     * @bodyParam  \Illuminate\Http\Request  $request
     * @bodyParam name \Illuminate\Http\Request required Stadium Name
     * @bodyParam image \Illuminate\Http\Request required Stadium Image
     * @bodyParam capacity \Illuminate\Http\Request required Stadium Capacity
     * @bodyParam region \Illuminate\Http\Request required Stadium Region
     * @bodyParam price \Illuminate\Http\Request required Stadium Price
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $stadiums = new Stadiums;
        $stadiums->name = $request->name ; 
        $stadiums->image = $request->image; 
        $stadiums->capacity = $request->capacity ; 
        $stadiums->region = $request->region; 
        $stadiums->price = $request->price; 
        $stadiums->save();
    }
   /**
     * Update a stadium
     *
     * @bodyParam  int  $id
     * @bodyParam  \Illuminate\Http\Request  $request
     * @bodyParam name \Illuminate\Http\Request required Stadium Name
     * @bodyParam image \Illuminate\Http\Request required Stadium Image
     * @bodyParam capacity \Illuminate\Http\Request required Stadium Capacity
     * @bodyParam region \Illuminate\Http\Request required Stadium Region
     * @bodyParam price \Illuminate\Http\Request required Stadium Price
     * @return Response
     */
    public function update($id,Request $request) {
        $stadiums = Stadiums::find($id); 
        $name = $request->get('name'); 
        $image= $request->get('image'); 
        $capacity= $request->get('capacity'); 
        $region= $request->get('region');
        $price= $request->get('price'); 
        $stadiums ->name= $name ; 
        $stadiums ->image= $image ; 
        $stadiums ->capacity= $capacity ; 
        $stadiums  ->region = $region; 
        $stadiums  ->price= $price; 
        $stadiums->save(); 
    }
    /**
     * Remove a stadium
     *
     * @bodyParam  $id  int
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $stadiums = Stadiums::find($id);
        $stadiums ->delete(); 
    }
    /**
     * Filter stadiums according to capacity and/or price
     *
     * @bodyParam $capacity \Illuminate\Http\Request required Stadium capacity
     * @bodyParam $order \Illuminate\Http\Request required Stadium priceOrder
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request){
        $capacity = $request->get('selection_capacity_param'); 
        $order = $request->get('selection_order_param');
       if (isset($capacity) && $capacity !== 'default' && isset ($order) && $order !== 'default') {
        $stadiums_sorted_filtered = Stadiums::where('capacity', $capacity)->orderBy('price', $order)->get();
        return  $stadiums_sorted_filtered;
       }else if (isset($order) && $order !== 'default'){
        $stadiums_sorted = Stadiums::orderBy('price', $order)->get();
        return  $stadiums_sorted ;
        }else if(isset($capacity) && $capacity !== 'default' ){
            $stadiums_filtered = Stadiums::where('capacity', $capacity)->get(); 
            return  $stadiums_filtered;
        }else {
            $stadiums_filtered = Stadiums::all();
            return  $stadiums_filtered;
        }
    }
}