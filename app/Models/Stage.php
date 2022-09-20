<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable=['title_ar','title_en'];
    public function courses()
    {
        return $this->hasMany(Course::class ,'stage_id');
    }
}
