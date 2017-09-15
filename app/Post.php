<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;

class Post extends Model
{
	protected $fillable = [
        'user_id' , 'type' , 'interest_rate' , 'deadline' , 'meeting_place' , 'amount',
    ];

    public function returnPost(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function bidder(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
