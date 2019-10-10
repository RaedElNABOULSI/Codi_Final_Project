<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatchRequests extends Model
{
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Match_Request';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status','req_host_id','ack_host_id','winning_host_id','added on'
    ];
    public $timestamps = false;
}
