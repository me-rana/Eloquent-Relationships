<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\eClassRoom;

class Student extends Model
{
    use HasFactory;

    public function getClassRoom(){
            return $this->belongsTo(eClassRoom::class,'class_id','id');
        }
}
