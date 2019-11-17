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
use Illuminate\Support\Facades\Hash;

/**
 * @group User management
 *
 * APIs for managing users
 */
class UsersController extends Controller  {

    /**
     * Displays Users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  {
      $user = User::join('Location', 'users.location_id', '=', 'Location.id')
                              ->join('Player_Position', 'users.id', '=', 'Player_Position.player_id')
                              ->join('Position', 'Player_Position.position_id', '=', 'Position.id')
                              ->join('Player_Trait', 'users.id', '=', 'Player_Trait.player_id')
                              ->join('Trait', 'Player_Trait.trait_id', '=', 'Trait.id')
                              ->select('users.footclick_name','users.age','users.foot','users.height', 'Location.location','Position.position','Trait.trait')
                              ->get();
      return   $user ;
     }


    /**
     *  Create a new user
     *
     * @bodyParam  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  { 
          // --- Get Input request ---------
          $email=$request->email_param;                                 
          $password=$request->password_param;                         
          $footclickName=$request->footClickName_param;    
          $age=$request->age_param;                                     
          $foot=$request->footSelected_param;                          
          $height=$request->height_param;       
          $locationId=$request->locationIdSelected_param;                
          $positionId=$request->positionIdSelected_param;         
          $traitIds=$request->traitIdSelected_param;     // array of trait ids
          //---Insert  into 'users' table in database 
          $user = new User; 
          $user->email =  $email;                                      
          $user->password =   Hash::make( $password);                      
          $user->footclick_name = $footclickName;  
          $user->age =  $age;                                          
          $user->foot =    $foot;                            
          $user->height =  $height;                          
          $user->location_id =   $locationId;                
          $user->save();   
          //---Insert  into 'Player_Position' table in database 
          $playerPosition=new PlayerPositions;
          $playerPosition->position_id=$positionId;
          $playerPosition->player_id = User::where('footclick_name', $footclickName)->value('id');
          $playerPosition->save();
          //---Insert  into 'Player_Trait' table in database 
          foreach($traitIds as $traitId){
            $playerTrait = new PlayerTrait; // new row
            $playerTrait->trait_id = $traitId;
            $playerTrait->player_id=User::where('footclick_name', $footclickName)->value('id');
            $playerTrait->save();
          }
          //---Insert  into 'User_Role' table in database 
          $userRole=new UserRoles;
          $userRole->user_id=User::where('footclick_name', $footclickName)->value('id');
          $userRole->role_id=Roles::where('role', 'Player')->value('id');
          $userRole->save();
             //     ---- return success/error message
           return response()->json([
             'currentUser' => $footclickName,
             'message' => 'Registration Successful!',
             ]);
            // redirect to Home page
           
    }


   /**
     * Update aChooseser
     *
     * @bodyParChoose  int  $id
     * @bodyParam \Illuminate\Http\Request  $request
     * @return Response
     */
    public function update($id,Request $request)   {

          $user=User::find($id);                                                                     // update by id

          $email = $request->get('email');                                                 // validate email input
          $password= $request->get('password');                                 // validate password input
          $footclick_name= $request->get('footclick_name');          // validate footclick name input
          $foot= $request->get('foot');                                                     // validate foot input
          $height= $request->get('height');                                            // validate height input
          $location= $request->get('location');                                      // validate location input
          $position = $request->get('position');                                     // validate position input
          $trait= $request->get('trait');                                                     // validate trait input
          $role= $request->get('role');                                                       // validate role input

          $user->email= $email ;                                                                   // assign input request to email record in database
          $user->password = $password;                                                   // assign input request to password record in database
          $user->footclick_name= $footclick_name;                             // assign input request to footclick name record in database
          $user->foot= $foot ;                                                                       // assign input request to foot record in database
          $user->height = $height;                                                              // assign input request to height record in database
          $user->location= $location;                                                         // assign input request to location record in database
          $user->position= $position ;                                                       // assign input request to position record in database
          $user->trait=$trait;                                                                       // assign input request to trait record in database
          $user->role=$role;                                                                        // assign input request to role record in database
          $user->save();                                                                                // updates all fields
    }  

    /**
     * Remove a user
     *
     * @bodyParam int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)     {

          $user = User::find($id);             // find user by id
          $user->delete();                         // delete a user record

    }

    /**
     * Display FILTERED players/users according to Host conditions
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)  {
      $ageMin=$request->get('ageMin_param');
      $ageMax=$request->get('ageMax_param');
      $positionId=$request->get('positionId_param');
      $locationId=$request->get('locationId_param');
      // return all positions
      if ($positionId=='5'){
            $userInfoFiltered= User::join('Location', 'users.location_id', '=', 'Location.id')
            ->join('Player_Position', 'users.id', '=', 'Player_Position.player_id')
            ->join('Position', 'Player_Position.position_id', '=', 'Position.id')
            ->join('Player_Trait', 'users.id', '=', 'Player_Trait.player_id')
            ->join('Trait', 'Player_Trait.trait_id', '=', 'Trait.id')
            ->select('users.footclick_name','users.age','users.foot','users.height', 'Location.location', 'Position.position','Trait.trait')
            ->whereBetween('age', [$ageMin, $ageMax])
            ->where('Location.id',$locationId)
            ->get();
            return   $userInfoFiltered; 
      }else{   // return specific positions
            $userInfoFiltered= User::join('Location', 'users.location_id', '=', 'Location.id')
            ->join('Player_Position', 'users.id', '=', 'Player_Position.player_id')
            ->join('Position', 'Player_Position.position_id', '=', 'Position.id')
            ->join('Player_Trait', 'users.id', '=', 'Player_Trait.player_id')
            ->join('Trait', 'Player_Trait.trait_id', '=', 'Trait.id')
            ->select('users.footclick_name','users.age','users.foot','users.height', 'Location.location','Position.position','Trait.trait')
            ->whereBetween('age', [$ageMin, $ageMax])
            ->where('Position.id',$positionId)
            ->where('Location.id',$locationId)
            ->get();
            return   $userInfoFiltered; 
      }
     }
}
