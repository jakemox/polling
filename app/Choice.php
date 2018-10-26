<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = [
        'option',
        'poll_id',
        'nr_of_votes'
    ];

    protected $guarded = [
        'updated_at',
        'created_at'
    ];

    
    public function poll()
    {
        return $this->belongsTo('App\Poll');
    }
}
