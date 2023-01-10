<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'sender_id',
        'reciver_id',
        'group_id'
    ];
    public function users()
    {
        return $this->belongsTo(User::class,'sender_id','id');
    }
}
