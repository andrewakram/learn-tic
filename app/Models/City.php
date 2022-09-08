<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable=['title_ar','title_en'];
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Blog') . '/' . $image;
        }
        return asset('default.png');
    }

}
