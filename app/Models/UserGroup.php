<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'group_id'
    ];
    public function usersgroup()
    {
        return $this->belongsTo(Group::class,'group_id','id');
    }
}
