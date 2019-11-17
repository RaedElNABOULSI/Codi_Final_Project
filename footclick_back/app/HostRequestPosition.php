<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostRequestPosition extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'HostReqPosition';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'host_id','position_id'
    ];
    public $timestamps = false;
}
