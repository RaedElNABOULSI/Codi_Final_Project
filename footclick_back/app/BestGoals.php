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
    protected $table = 'GoalFootage';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'footclick_name','image'
    ];

}
