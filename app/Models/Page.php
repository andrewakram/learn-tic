<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title_ar','title_en','body_ar','body_en','image','type'];
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Blog') . '/' . $image;
        }
        return asset('default.png');
    }

}

