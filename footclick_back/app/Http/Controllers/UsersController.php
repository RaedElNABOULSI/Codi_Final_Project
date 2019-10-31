<?php

namespace App\Http\Controllers;

use App\Roles;
use App\UserRoles;
use App\PlayerTrait;
use App\Traits;
use App\PlayerPositions;
use App\Positions;
use App\Locations;
use App\User;
use Illuminate\Http\Request;

/**
 * @group User management
 *
 * APIs for managing users
 */
class UsersController extends Controller
{
    /**
     * Displays Users
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
     *  Create a new user
     *
     * @bodyParam  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
//----------------------------@start get params/body registration values -------------------------------------

        $email=$request->email_param; // get email value
        $password=$request->password_param; // get password value
        $footclickName=$request->footClickName_param; // get footclick name value
        $age=$request->age_param; // get age value
        $foot=$request->footSelected_param; // get foot value
        $height=$request->height_param; // get height value
        $location=$request->locationSelected_param; // get location value
        $position=$request->positionSelected_param; // get position value
        $trait=$request->traitSelected_param; // get trait value

//----------------------------@end get params/body registration values ------------------------------------------

//----@start create a new instance of the model  -----------

$user = new User; 
$playerPosition=new PlayerPositions;
$trait=new Traits;
$playerTrait=new PlayerTrait;
$userRole=new UserRoles;

//----@end create a new instance of the model  -----------------

//------------------------@start INSERT INTO 'users' table----------------------------------------------------------

     $user ->email =  $email; // validate email input
    $user ->password =   $password; // validate password input
     $user ->footclick_name = $footclickName; // validate footclick name input
     $user  ->age =  $age; // validate age input
     $user  ->foot =    $foot; // validate foot input
     $user  ->height =  $height; // validate height input
     $user ->location_id =   $locationId; // validate location id input

//------------------------@end INSERT INTO 'users' table----------------------------------------------------------

//------------------------@start INSERT INTO 'Player_Position' table-------------------------------------

          $playerPosition ->position_id = $positionId; // validate position id input
        $playerPosition->player_id=$playerId; // validate player id 

//------------------------@end INSERT INTO 'Player_Position' table---------------------------------------

//-----------@start GET 'id' FIELD FROM 'Location', 'Position', 'Trait', 'users', 'Role' tables-------------------------------------

$locationId = Locations::where('location', $location)->value('id'); // get location id 
$positionId =  Positions::where('position', $position)->value('id'); // get position id 
$playerId =  User::where('email', $email)->value('id'); // get player id from 'users' table
$traitId =  Traits::where('trait', $trait)->value('id'); // get trait id 
$roleId =  Roles::where('role', 'Player')->value('id'); // get role id in 'Role' table

//---------------@end GET 'id' FIELD FROM 'Location', 'Position', 'Trait', 'users', 'Role' tables-------------------------------------

//------------------------@start INSERT INTO 'Player_Trait' table-------------------------------------

     $playerTrait->trait_id = $traitId; // validate trait id input
     $playerTrait->player_id=$playerId; // validate player id 
          
//------------------------@end INSERT INTO 'Player_Trait' table---------------------------------------



//------------------------@start INSERT INTO 'User_Role' table-------------------------------------

     $userRole ->role_id = $roleId; // validate role id input
     $userRole->user_id=$playerId; // // validate player id in 'User_Role' table

//------------------------@end INSERT INTO 'User_Role' table-------------------------------------

     $user ->save(); // insert records to the database
     $playerPosition ->save(); // insert records to the database
     $playerTrait ->save(); // insert records to the database
     $userRole->save(); // insert records to the database

     //------------test--------------------
   
          //------------test--------------------
    }


   /**
     * Update a user
     *
     * @bodyParam  int  $id
     * @bodyParam \Illuminate\Http\Request  $request
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
     * Remove a user
     *
     * @bodyParam int $id
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
