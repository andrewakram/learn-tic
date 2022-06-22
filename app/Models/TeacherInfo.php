<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherInfo extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id','full_name', 'national_id', 'residence_id',
        'qualifications', 'university', 'learn_type', 'categoey_id',
        'years_of_exper','desctiption','inquiry_cost_normal','inquiry_cost_urgent'];

    public function teacher(){
        return $this->belongsTo(User::class,'teacher_id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'categoey_id');
    }
}
