<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExam extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_id','teacher_id','course_id','user_marks','exam_marks','exam_title_ar',
        'exam_title_en'
    ];
}
