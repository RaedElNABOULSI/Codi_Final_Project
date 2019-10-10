<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Testimonial';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','content','added on'
    ];
    public $timestamps = false; // deletes the delault built-in timesamps
}
