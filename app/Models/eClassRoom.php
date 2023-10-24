<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Student;

class eClassRoom extends Model
{
    use HasFactory;
    public function getStudent(){
        return $this->hasMany(Student::class,'class_id');
    }
}
