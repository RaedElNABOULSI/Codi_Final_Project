<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Location';

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'location'
    ];
}
