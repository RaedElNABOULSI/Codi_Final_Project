<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Collection;
use App\Stadiums;
use App\User;
use App\UserHost;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ----  api resources -----------------------
Route::resource('bestgoal','BestGoalController'); 
Route::resource('hostreqposition','HostRequestPositionController');
Route::resource('hostteam','HostTeamController');
Route::resource('matchreq','MatchRequestController');
Route::resource('playerposition','PlayerPositionController');
Route::resource('playertrait','PlayerTraitController');
Route::resource('position','PositionController');
Route::resource('stadium','StadiumController');
Route::resource('teamreq','TeamRequestController');
Route::resource('testimonial','TestimonialController');
Route::resource('trait','TraitController');
Route::resource('location','LocationController'); // locations
Route::resource('user','UsersController'); // Users 
Route::resource('role','RoleController'); // roles

// -------FILTER players according to HOST cdts-----                
Route::get('filterPlayers', 'UsersController@filter') ;

// ------- filter/sort stadium--------------------------------                  
Route::get('filter_sort', 'StadiumController@filter') ;     

// -------------- Send Mail --------------------------------------------
Route::get('/send/email', 'HomeController@mail');          

// -----Login -------------------------------
Route::post('login',function (Request $request) {
    if(count(User::where('email', $request->email_param)->get()) > 0){
       $user = User::where('email', $request->email_param)->first();
       $auth = Hash::check($request->password_param, $user->password);
       if($user && $auth){
          $user->rollApiKey(); //Model Function
          return response(array(
             'currentUser' => $user,
             'message' => 'Login Successful!',
          ));
          
       }
       return [
          'id'=> 2,
          'user'=>$user,
          'pass'=>$auth
       ];
       
    }
    return response(array(
       'message' => 'Unauthorized, check your credentials.',
    ), 401);
});

// ----- UPLOAD GOAL FOOTAGE -----------------------------------------------------------------
Route::post('fileupload', 'UploadFileController@store');

// --------------Check if user is host--------------------------------------------
Route::get('/checkhost', function (Request $request){
   $userId=$request->get('userId');
   $searchId= UserHost::findorfail($userId);
   if($searchId){
      return response(array(
      'searchResult' => $searchId,
      'message' => 'User is a host',
   ));
   }else{
      return response(array(
         'searchResult' => 'error',
         'message' => 'User is not a host',
      ));
   }
   // return $searchId;
});     