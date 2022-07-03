<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_id','course_id','mark','title_ar','title_en'
    ];

    public function answers(){
        return $this->hasMany(Answer::class,'question_id');
    }
}
