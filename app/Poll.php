<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'vote_user', 'vote_id', 'user_id');
    }
}
