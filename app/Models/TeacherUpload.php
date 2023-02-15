<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherUpload extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function getFileAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Teacher/files') . '/' . $image;
        }
    }

    public function setFileAttribute($image)
    {
        if (is_file($image)) {
            $img_name = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/Teacher/files/'), $img_name);
            $this->attributes['file'] = $img_name;
        } else {
            $this->attributes['file'] = $image;
        }

    }
}
