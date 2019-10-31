<?php

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Stadiums;
use App\User;
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

// -------------------------------@start  api resources -------------------------------------------------------
Route::resource('bestgoal','BestGoalController'); 
Route::resource('hostreqposition','HostReqPositionController');
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
Route::resource('user','UsersController'); // Users registration
// -------------------------------@end api resources -------------------------------------------------------


// -----------@start filter/sort stadium--------------------------------
                              
Route::get('filter_sort', 'StadiumController@filter') ;
                               
// -----------@end filter/sort stadium----------------------------------

// --------------------@start Send Mail --------------------------------------------
Route::get('/send/email', 'HomeController@mail');          
// --------------------@end Send Mail -----------------------------------------------


// -------------------------------@start Login -----------------------------------------------------------------
Route::post('login',function (LoginRequest $request) {
   
    if(count(User::where('email', $request->email)->get()) > 0){
       $user = User::where('email', $request->email)->first();
       $auth = Hash::check($request->password, $user->password);
       if($user && $auth){
    
          $user->rollApiKey(); //Model Function
    
          return response(array(
             'currentUser' => $user,
             'message' => 'Authorization Successful!',
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
// -------------------------------@end Login ------------------------------------------------------------------


// -------------------------------@start UPLOAD -----------------------------------------------------------------
                               // here is the UPLOAD FUNCTION 
// -------------------------------@end UPLOAD ------------------------------------------------------------------