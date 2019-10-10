<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traits extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Trait';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'trait'
    ];
    public $timestamps = false;
}
