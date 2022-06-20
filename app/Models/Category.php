<?php

namespace App\Models;

use App\Models\Course;
use App\Models\TeacherInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['title_ar','title_en'];

    public function course()
    {
        return $this->hasMany(Course::class ,'categoey_id' , 'id');
    }
    
    public function teacher(){
        return  $this->hasMany(TeacherInfo::class, 'categoey_id');
    }

  
}
