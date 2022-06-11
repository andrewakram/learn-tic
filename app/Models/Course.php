<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoey_id','teacher_id','title_ar','title_en','body_ar','body_en',
        'price_before','price_after','points','rate','course_time',
    ];

}
