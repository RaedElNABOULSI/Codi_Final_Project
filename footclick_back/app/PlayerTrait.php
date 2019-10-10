<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerTrait extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Player_Trait';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'player_id','trait_id'
    ];
    public $timestamps = false;
}
