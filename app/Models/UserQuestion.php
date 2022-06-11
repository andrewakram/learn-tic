<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_exam_id','exam_id','mark','question_title_ar','question_title_en','answer_title_ar',
        'answer_title_en'
    ];
}
