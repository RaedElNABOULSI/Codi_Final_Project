<?php

namespace App\Http\Controllers;

use App\HostTeams;
use App\Positions;
use App\Locations;
use App\HostRequestPosition;
use App\UserHost;
use App\User;
use Illuminate\Http\Request;
/**
 * @group Host Team management
 *
 * APIs for managing Hosts
 */
class HostTeamController extends Controller
{
    /**
     * Display all hosts
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
           $hostTeams = HostTeams::join('Location', 'Host_Team.location_id', '=', 'Location.id')
                                                            ->join('HostReqPosition','Host_Team.id','=','HostReqPosition.host_id')
                                                            ->join('Position', 'HostReqPosition.position_id', '=', 'Position.id')
                                                            ->join('UserHost', 'Host_Team.id', '=', 'UserHost.host_id')
                                                            ->join('users', 'UserHost.user_id', '=', 'users.id')
                                                            ->select('Host_Team.no_of_players','Host_Team.team_name','Host_Team.age_min','Host_Team.age_max','users.footclick_name','Location.location','Position.position')
                                                            ->get();
           return   $hostTeams ;
    }

    /**
     * Create a new host
     *
     * @bodParam  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // retrieve input values
        $playerCapacity=$request->playerCapacity;
        $ageMin=$request->ageMin;
        $ageMax=$request->ageMax;
        $teamName=$request->teamName;
        $locationId=$request->locationId;
        $positionId=$request->positionId;
        $userName=$request->userName;
        // insert into 'Host_Team' table
        $hostTeams = new HostTeams; 
        $hostTeams->no_of_players=$playerCapacity;
        $hostTeams->age_min=$ageMin;
        $hostTeams->age_max=$ageMax;
        $hostTeams->team_name=$teamName;
        $hostTeams->location_id=$locationId;
        $hostTeams ->save(); 
        // insert into 'Host_Req_Position' table
        $hostReqPositions=new HostRequestPosition;
        $hostReqPositions->host_id=HostTeams::where('team_name', $teamName)->value('id');
        $hostReqPositions->position_id=$positionId;
        $hostReqPositions->save();
        // insert into 'UserHost' table
        $userHost=new UserHost;
        $userHost->user_id=User::where('footclick_name', $userName)->value('id');
        $userHost->host_id=HostTeams::where('team_name', $teamName)->value('id');
        $userHost->save();
        // return message
        return response()->json([
          'TeamName' => $teamName,
          'message' => 'Hosting Successful!',
          ]);
    }



   /**
     * Update a host
     *
     * @bodyParam  int  $id
     * @bodParam  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function update($id,Request $request)
    {
        //------------------------@start update a host team field ---------------------------------------------------
        
        $hostTeams  =HostTeams::find($id); // update by id

         $no_of_players = $request->get('no_of_players '); // validate no of players input
         $age_min= $request->get('age_min'); // validate min age input
         $age_max= $request->get('age_max'); // validate max age input
         $team_name= $request->get('team_name'); // validate team name input
 
 
         $hostTeams ->no_of_players= $no_of_players ; // assign input request to no of players record in database
         $hostTeams  ->age_min=$age_min ; // assign input request to min age record in database
         $hostTeams  ->age_max =  $age_max; // assign input request to max age record in database
         $hostTeams  ->team_name= $team_name; // assign input request to team name record in database
 
         $hostTeams ->save(); // updates all fields
 
  //------------------------@end update a host team field ---------------------------------------------------
    }


    /**
     * Remove a host
     *
     * @bodParam  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//------------------------@start delete a video field ---------------------------------------------------

    $hostTeams = HostTeams::find($id); // find host by id

   $hostTeams ->delete(); // delete a host record

//------------------------@end delete a video field ---------------------------------------------------
    }
}
