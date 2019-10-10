<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BestGoals extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'BestGoal';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'video','description','player_id','added_on'
    ];
    public $timestamps = false;
}
