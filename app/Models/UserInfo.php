<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class UserInfo extends Model
{
    use HasFactory;
    protected function getUser(){
        return $this->hasOne(User::class,'id','uid');
    }
}
