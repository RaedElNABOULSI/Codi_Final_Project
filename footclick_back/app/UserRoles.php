<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'User_Role';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'user_id','role_id'
    ];
    public $timestamps = false;
}
