<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatbtuser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'reciver_id',
        'last_messenger_id',
        'group_id',
        'last_message_id'
    ];
    public function users()
    {
        return $this->hasOne(User::class,'id','reciver_id');
    }
    public function message()
    {
        return $this->hasOne(ChatHistory::class,'id','last_message_id');
    }
    public function lastmessanger()
    {
        return $this->hasOne(User::class,'id','last_messenger_id');
    }
      public function group()
    {
        return $this->hasOne(Group::class,'id','group_id');
    }

}
