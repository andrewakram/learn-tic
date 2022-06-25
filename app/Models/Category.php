<?php

namespace App\Models;

use App\Models\Course;
use App\Models\TeacherInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['title_ar','title_en','image'];

    public function courses()
    {
        return $this->hasMany(Course::class ,'category_id');
    }

    public function teacher(){
        return  $this->hasMany(TeacherInfo::class, 'category_id');
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Category') . '/' . $image;
        }
        return asset('default.png');
    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $img_name = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/Category/'), $img_name);
            $this->attributes['image'] = $img_name;
        } else {
            $this->attributes['image'] = $image;
        }

    }


}
