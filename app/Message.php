<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //belongs to 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // this is done to prevent the  mass assignment exception
    protected $fillable = ['body'];
    // this tells us whether the message is our own or the  user's we chat in 
    protected $appends = ['selfMessage'];

    // we add a function that tells us whether the message is owned by a signed user or another user.
    public function getSelfMessageAttribute()
    {
        return $this->user_id === auth()->user()->id();
    }
}
