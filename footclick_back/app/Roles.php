<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Role';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['role'];
    public $timestamps = false;
}
