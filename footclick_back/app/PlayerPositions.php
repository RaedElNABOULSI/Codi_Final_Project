<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerPositions extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Player_Position';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position_id','player_id'
    ];
    public $timestamps = false;
}
