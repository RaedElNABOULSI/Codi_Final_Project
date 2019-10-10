<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamRequests extends Model
{
         /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Team_Request';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status','type','player_id','host_id','added on'
    ];
    public $timestamps = false;
}
