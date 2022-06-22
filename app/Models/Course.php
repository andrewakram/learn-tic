<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\TeacherInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoey_id','teacher_id','title_ar','title_en','body_ar','body_en',
        'price_before','price_after','points','rate','course_time',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class );
    }

    public function teacher()
    {
        return $this->belongsTo(TeacherInfo::class , 'teacher_id' );
    }



}
