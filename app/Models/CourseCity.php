<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCity extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoey_id','teacher_id','city_id','course_id'
    ];
}
