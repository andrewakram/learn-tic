<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherInfo extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id','full_name', 'national_id', 'residence_id',
        'qualifications', 'university', 'learn_type', 'categoey_id',
        'years_of_exper','desctiption','inquiry_cost_normal','inquiry_cost_urgent'];

        public function category(){
            return $this->belongsTo(Category::class);
        }

        
        public function courses(){
            return $this->hasMany(Course::class, 'teacher_id');
        }
}
