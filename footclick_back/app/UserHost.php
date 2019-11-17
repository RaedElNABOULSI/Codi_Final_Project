<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHost extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'UserHost';
    protected $primaryKey = 'user_id'; // 'findorfail' parameter

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'user_id','host_id'
    ];
}
