<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//------------------------@start Get all users -------------------------------------------
          $user = User::all();
          return   $user ;
//------------------------@end Get all users --------------------------------------------
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//------------------------@start Insert a user-------------------------------------------
          
     $user = new User; // create a new instance of the model

     $user  ->email = $request->email ; // validate email input
     $user ->password = $request->password; // validate password input
     $user ->footclick_name = $request->footclick_name; // validate footclick name input
     $user  ->foot = $request->foot; // validate foot input
     $user  ->height = $request->height ; // validate height input
     $user ->location = $request->location; // validate location input
     $user  ->position = $request->position ; // validate football position input
     $user  ->trait = $request->trait; // validate trait input
     $user ->role = $request->role; // validate player role input

    $user ->save(); // insert records to the database

//------------------------@end Insert a user -------------------------------------------
    }


   /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //------------------------@start update a user field ---------------------------------------------------
        
        $user  = User::find($id); // update by id

        $email = $request->get('email'); // validate email input
        $password= $request->get('password'); // validate password input
        $footclick_name= $request->get('footclick_name'); // validate footclick name input
        $foot= $request->get('foot'); // validate foot input
        $height= $request->get('height'); // validate height input
        $location= $request->get('location'); // validate location input
        $position = $request->get('position'); // validate position input
        $trait= $request->get('trait'); // validate trait input
        $role= $request->get('role'); // validate role input

        $user ->email= $email ; // assign input request to email record in database
        $user ->password = $password; // assign input request to password record in database
        $user  ->footclick_name= $footclick_name; // assign input request to footclick name record in database
        $user ->foot= $foot ; // assign input request to foot record in database
        $user ->height = $height; // assign input request to height record in database
        $user  ->location= $location; // assign input request to location record in database
        $user ->position= $position ; // assign input request to position record in database
        $user ->trait = $trait; // assign input request to trait record in database
        $user  ->role= $role; // assign input request to role record in database

        $user ->save(); // updates all fields

 //------------------------@end update a user field ---------------------------------------------------
    }  

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//------------------------@start delete a user field ---------------------------------------------------

        $user = User::find($id); // find user by id

        $user ->delete(); // delete a user record

 //------------------------@end delete a user field ---------------------------------------------------
    }
}
