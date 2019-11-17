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
     * @bodParam playerCapacity  \Illuminate\Http\Request required Players needed  
     * @bodParam ageMin \Illuminate\Http\Request required Minimum age needed
     * @bodParam ageMax  \Illuminate\Http\Request required Maximum age needed 
     * @bodParam teamName  \Illuminate\Http\Request required Team name 
     * @bodParam location \Illuminate\Http\Request required Preferred location  
     * @bodParam position  \Illuminate\Http\Request required Position needed 
     * @bodParam userName  \Illuminate\Http\Request required Host Username
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
    public function update($id,Request $request){
        $hostTeams  =HostTeams::find($id); 
        $no_of_players = $request->get('no_of_players '); 
        $age_min= $request->get('age_min');
        $age_max= $request->get('age_max'); 
        $team_name= $request->get('team_name'); 
        $hostTeams ->no_of_players= $no_of_players ; 
        $hostTeams  ->age_min=$age_min ; 
        $hostTeams  ->age_max =  $age_max; 
        $hostTeams  ->team_name= $team_name; 
        $hostTeams ->save(); 
    }
    /**
     * Remove a host
     *
     * @bodParam  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $hostTeams = HostTeams::find($id);
        $hostTeams ->delete(); 
    }
}
