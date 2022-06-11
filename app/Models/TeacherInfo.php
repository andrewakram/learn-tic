<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherInfo extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'national_id', 'residence_id',
        'qualifications', 'university', 'learn_type', 'categoey_id',
        'years_of_exper','desctiption','inquiry_cost_normal','inquiry_cost_urgent'];

}
