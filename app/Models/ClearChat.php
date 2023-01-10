<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClearChat extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'reciver_id',
        'group_id'
    ];
}
