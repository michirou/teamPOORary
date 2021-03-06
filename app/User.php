<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;
use App\Post;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_name' , 'address' , 'socmed_acc' , 'card_num' , 'username' , 'email' , 'work' , 'salary' , 'numyears_working' , 'password' , 'credit_score' , 'social_score' ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function bids(){
        return $this->hasMany('App\Post');
    }
}
