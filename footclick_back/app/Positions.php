<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Position';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position'
    ];
    public $timestamps = false;
}
