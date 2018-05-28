<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function followers(){
        return $this->belongsToMany('App\User','follows','user_followed_id','user_follower_id')
                    ->where('user_followed_id',$this->id);
    }
    public function followeds(){
        return $this->belongsToMany('App\User','follows','user_follower_id','user_followed_id')
                    ->where('user_follower_id',$this->id);
    }

    public function tweets(){
        return $this->hasMany('App\Tweet');
    }
}
