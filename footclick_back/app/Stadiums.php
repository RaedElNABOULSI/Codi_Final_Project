<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadiums extends Model
{
         /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Stadium';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','image','capacity','region','price','added on'
    ];
    public $timestamps = false;
}
