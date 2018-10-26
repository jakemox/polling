<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = [
        'name',
        'description',
        'code',
        'user_id'
    ];
    
    public function choices()
    {
        return $this->hasMany('App\Choice');
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User', 'vote_user', 'vote_id', 'user_id');
    }
}
