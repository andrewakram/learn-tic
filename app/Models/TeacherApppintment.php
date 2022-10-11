<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherApppintment extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id','from','to','day','meeting_id','topic','start_at','duration','password','start_url','join_url'];
   
    public function teacher(){
        return $this->belongsTo(User::class,'teacher_id');
    }
}
