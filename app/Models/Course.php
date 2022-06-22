<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id','teacher_id','title_ar','title_en','body_ar','body_en',
        'price_before','price_after','points','rate','course_time',
    ];

    public function teacher(){
        return $this->belongsTo(User::class,'teacher_id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function courseSections(){
        return $this->hasMany(CourseSection::class,'course_id');
    }

    public function courseCities(){
        return $this->hasMany(CourseCity::class,'course_id');
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Course') . '/' . $image;
        }
        return asset('default.png');
    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $img_name = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/Course/'), $img_name);
            $this->attributes['image'] = $img_name;
        } else {
            $this->attributes['image'] = $image;
        }

    }

}
