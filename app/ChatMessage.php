<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class ChatMessage extends Model
{
    protected $table = 'chat_messages';


    public function author(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
