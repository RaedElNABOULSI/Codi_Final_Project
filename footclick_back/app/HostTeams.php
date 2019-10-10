<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostTeams extends Model
{
          /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Host_Team';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'no_of_players','age_min','age_max','team_name','added on'
    ];
    public $timestamps = false;
}
