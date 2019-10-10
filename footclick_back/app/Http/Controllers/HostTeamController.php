<?php

namespace App\Http\Controllers;

use App\HostTeams;
use Illuminate\Http\Request;
/**
 * @group Host Team management
 *
 * APIs for managing Hosts
 */
class HostTeamController extends Controller
{
    /**
     * Display hosts
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //------------------------@start Get the host of the team -------------------------------------------
           $hostTeams = HostTeams::all();
           return   $hostTeams ;
     //------------------------@end Get the host of the team --------------------------------------------
    }

  

    /**
     * Create a new host
     *
     * @bodParam  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //------------------------@start Insert a host of a team-------------------------------------------
          

        $hostTeams = new HostTeams; // create a new instance of the model

        $hostTeams->no_of_players = $request->no_of_players; // validate no. of players input
        $hostTeams ->age_min = $request->age_min; // validate min age input
        $hostTeams ->age_max = $request->age_max ; // validate max age input
        $hostTeams ->team_name= $request->team_name; // validate team name input

        $hostTeams ->save(); // insert records to the database

      //------------------------@end Insert a host of a team -------------------------------------------
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
