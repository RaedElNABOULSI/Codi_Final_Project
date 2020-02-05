<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Collection;
use App\Stadiums;
use App\User;
use App\UserHost;
use App\HostRequestPosition;
use App\HostTeams;
use App\TeamRequests;
use App\Locations;
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
Route::resource('bestgoal', 'BestGoalController');
Route::resource('hostreqposition', 'HostRequestPositionController');
Route::resource('hostteam', 'HostTeamController');
Route::resource('matchreq', 'MatchRequestController');
Route::resource('playerposition', 'PlayerPositionController');
Route::resource('playertrait', 'PlayerTraitController');
Route::resource('position', 'PositionController');
Route::resource('stadium', 'StadiumController');
Route::resource('teamreq', 'TeamRequestController');
Route::resource('testimonial', 'TestimonialController');
Route::resource('trait', 'TraitController');
Route::resource('location', 'LocationController'); // locations
Route::resource('user', 'UsersController'); // Users 
Route::resource('role', 'RoleController'); // roles

// -------FILTER players according to HOST cdts-----                
Route::get('filterPlayers', 'UsersController@filter');

// ------- filter/sort stadium--------------------------------                  
Route::get('filter_sort', 'StadiumController@filter');

// -------------- Send Mail --------------------------------------------
Route::post('/send/email', 'HomeController@mail');

// -----Login -------------------------------
Route::post('login', function (Request $request) {
   if (count(User::where('email', $request->email_param)->get()) > 0) {
      $user = User::where('email', $request->email_param)->first();
      $auth = Hash::check($request->password_param, $user->password);
      if ($user && $auth) {
         $user->rollApiKey(); //Model Function
         return response(array(
            'currentUser' => $user,
            'message' => 'Login Successful!',
         ));
      }
      return [
         'id' => 2,
         'user' => $user,
         'pass' => $auth
      ];
   }
   return response(array(
      'message' => 'Unauthorized, check your credentials.',
   ), 401);
});

// ----- UPLOAD GOAL FOOTAGE -----------------------------------------------------------------
Route::post('fileupload', 'UploadFileController@store');

// --------------Check if user is host--------------------------------------------
Route::get('/checkhost', function (Request $request) {
   $userId = $request->get('userId');
   $searchId = UserHost::findorfail($userId);
   if ($searchId) {
      // --return filtered players-----
      $hostId = UserHost::where('user_id', $userId)->value('host_id');
      $positionId = HostRequestPosition::where('host_id', $hostId)->value('position_id');
      $locationId = HostTeams::where('id', $hostId)->value('location_id');
      $ageMin = HostTeams::where('id', $hostId)->value('age_min');
      $ageMax = HostTeams::where('id', $hostId)->value('age_max');
      // return all positions
      if ($positionId == '5') {
         $userInfoFiltered = User::join('Location', 'users.location_id', '=', 'Location.id')
            ->join('Player_Position', 'users.id', '=', 'Player_Position.player_id')
            ->join('Position', 'Player_Position.position_id', '=', 'Position.id')
            ->join('Player_Trait', 'users.id', '=', 'Player_Trait.player_id')
            ->join('Trait', 'Player_Trait.trait_id', '=', 'Trait.id')
            ->select('users.footclick_name', 'users.age', 'users.foot', 'users.height', 'Location.location', 'Position.position', 'Trait.trait')
            ->whereBetween('age', [$ageMin, $ageMax])
            ->where('Location.id', $locationId)
            ->get();
         return $userInfoFiltered;
      } else { // return specific positions
         $userInfoFiltered = User::join('Location', 'users.location_id', '=', 'Location.id')
            ->join('Player_Position', 'users.id', '=', 'Player_Position.player_id')
            ->join('Position', 'Player_Position.position_id', '=', 'Position.id')
            ->join('Player_Trait', 'users.id', '=', 'Player_Trait.player_id')
            ->join('Trait', 'Player_Trait.trait_id', '=', 'Trait.id')
            ->select('users.footclick_name', 'users.age', 'users.foot', 'users.height', 'Location.location', 'Position.position', 'Trait.trait')
            ->whereBetween('age', [$ageMin, $ageMax])
            ->where('Position.id', $positionId)
            ->where('Location.id', $locationId)
            ->get();
         return $userInfoFiltered;
         // return $userInfoFiltered;
         // return response(array(
         //    'searchResult' => $searchId,
         //    'filteredPlayers'=>$userInfoFiltered,
         //    'message' => 'User is a host',
         // ));
      }
   } else {
      return response(array(
         'searchResult' => 'error',
         'message' => 'User is not a host',
      ));
   }
});

// -----Team request accepted -------------------------------
Route::post('/teamreqaccept', function (Request $request) {
   $playerFootclickName = $request->playerFname;
   $playerId = User::where('footclick_name', $playerFootclickName)->value('id');
   $hostId = TeamRequests::where('player_id', $playerId)->value('host_id');
   $statusTwo = $request->statusAccepted;
   TeamRequests::where('player_id', $playerId)->update(['status' => $statusTwo]);
   $playerCapacity = HostTeams::where('id', $hostId)->value('no_of_players');
   HostTeams::where('id', $hostId)->update(['no_of_players' => $playerCapacity - 1]);
   return response(array(
      'playerCapacity' => $playerCapacity,
      'message' => 'You joined the team successfully!',
   ));
});

// --------------get Full teams' teamname, host & location --------------------------------------------
Route::get('fullteams', function () {
   $hostId = HostTeams::where('no_of_players', '=', 0)->value('id');
   $userId = UserHost::where('host_id', '=', $hostId)->value('user_id');
   $hostName = User::where('id', '=', $userId)->value('footclick_name');
   $teamName = HostTeams::where('no_of_players', '=', 0)->value('team_name');
   $locationId = HostTeams::where('no_of_players', '=', 0)->value('location_id');
   $location = Locations::where('id', '=', $locationId)->value('location');
   return response(array(
      'teamName' => $teamName,
      'hostName' => $hostName,
      'location' => $location,
      'message' => 'Full team info returned successfully'
   ));
});
