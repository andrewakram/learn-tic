<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id','course_id','total','no_of_questions','title_ar','title_en'
    ];

    public function questions(){
        return $this->hasMany(Question::class,'exam_id');
    }

    public function teacher(){
        return $this->belongsTo(User::class,'teacher_id');
    }

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
