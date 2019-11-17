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
     * @bodyParam  $request  \Illuminate\Http\Request 
     * @bodyParam  $email  \Illuminate\Http\Request required Email of the user
     * @bodyParam  $password  \Illuminate\Http\Request required Password of the user
     * @bodyParam  $footclickName  \Illuminate\Http\Request required FootclickName of the user
     * @bodyParam  $age  \Illuminate\Http\Request required Age of the user
     * @bodyParam  $foot  \Illuminate\Http\Request required Foot of the user
     * @bodyParam  $height  \Illuminate\Http\Request required Height of the user
     * @bodyParam  $locationId  \Illuminate\Http\Request required Location of the user
     * @bodyParam  $positionId  \Illuminate\Http\Request required Position of the user
     * @bodyParam  $traitIds  \Illuminate\Http\Request required Trait of the user
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
          $traitIds=$request->traitIdSelected_param;     
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
            $playerTrait = new PlayerTrait; 
            $playerTrait->trait_id = $traitId;
            $playerTrait->player_id=User::where('footclick_name', $footclickName)->value('id');
            $playerTrait->save();
          }
          //---Insert  into 'User_Role' table in database 
          $userRole=new UserRoles;
          $userRole->user_id=User::where('footclick_name', $footclickName)->value('id');
          $userRole->role_id=Roles::where('role', 'Player')->value('id');
          $userRole->save();
             //---- return success/error message
           return response()->json([
             'currentUser' => $footclickName,
             'message' => 'Registration Successful!',
             ]);
    }
   /**
     * Update a User
     *
     * @bodyParChoose  int  $id
     * @bodyParam \Illuminate\Http\Request  $request
     * @return Response
     */
    public function update($id,Request $request)   {
          $user=User::find($id);                                                                     
          $email = $request->get('email');                                                 
          $password= $request->get('password');                                
          $footclick_name= $request->get('footclick_name');          
          $foot= $request->get('foot');                              
          $height= $request->get('height');                                            
          $location= $request->get('location');                                      
          $position = $request->get('position');                                     
          $trait= $request->get('trait');                                                    
          $role= $request->get('role');                                                      
          $user->email= $email ;                                                                  
          $user->password = $password;                                                   
          $user->footclick_name= $footclick_name;                             
          $user->foot= $foot ;                                                                      
          $user->height = $height;                                                              
          $user->location= $location;                                                         
          $user->position= $position ;                                                       
          $user->trait=$trait;                                                               
          $user->role=$role;                                                                 
          $user->save();                                                                     
    }  
    /**
     * Remove a user
     *
     * @bodyParam $id int required User id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)     {
          $user = User::find($id);             // find user by id
          $user->delete();                         // delete a user record
    }
    /**
     * Display FILTERED players/users according to Host conditions
     *
     * @bodyParam \Illuminate\Http\Request $request
     * @bodyParam $ageMin \Illuminate\Http\Request $request required Minimum Age
     * @bodyParam $ageMax \Illuminate\Http\Request $request required Maximum Age
     * @bodyParam $positionId \Illuminate\Http\Request $request required Preferred Position
     * @bodyParam $locationId \Illuminate\Http\Request $request required Preferred Location
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
