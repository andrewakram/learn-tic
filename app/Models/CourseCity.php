<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseCity extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id','teacher_id','city_id','course_id'
    ];

    public function city(){
        return $this->belongsTo(City::class,'city_id');
    }

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Blog') . '/' . $image;
        }
        return asset('default.png');
    }
    
    
}
