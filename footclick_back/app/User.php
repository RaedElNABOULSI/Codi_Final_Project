<?php

namespace App;


use Illuminate\Support\Str;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


// class User extends Authenticatable
class User extends Authenticatable
{
    use Notifiable;

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email','password','footclick_name','age', 'foot', 'height', 'location_id',' added_on'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
      
    ];
    public $timestamps = false;
    public function rollApiKey(){
        do{
           $this->api_token =Str::random(60);
        }while($this->where('api_token', $this->api_token)->exists());
        $this->save();
     }
}
