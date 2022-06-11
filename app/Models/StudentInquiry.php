<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInquiry extends Model
{
    use HasFactory;

    protected $fillable = ['type','student_id','teacher_id',
        'date','from','to'];
}
