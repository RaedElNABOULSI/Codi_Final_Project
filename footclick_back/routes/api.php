<?php

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Stadiums;
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
Route::resource('user','UsersController');
// -------------------------------@end api resources -------------------------------------------------------


// -------------------------------@start filter by capacity stadium--------------------------------------------------
                              
Route::get('filter_sort', 'StadiumController@filter') ;
                               
// -------------------------------@end filter by capacity in stadium-----------------------------------------------



// -------------------------------@start Login -----------------------------------------------------------------
                                // here is the login function
// -------------------------------@end Login ------------------------------------------------------------------


// -------------------------------@start UPLOAD -----------------------------------------------------------------
                               // here is the UPLOAD FUNCTION 
// -------------------------------@end UPLOAD ------------------------------------------------------------------