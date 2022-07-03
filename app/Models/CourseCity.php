<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCity extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id','teacher_id','city_id','course_id'
    ];

    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }
    
}
