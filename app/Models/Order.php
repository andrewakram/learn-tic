<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded=[];

//    protected $fillable = [
//        'teacher_id','student_id','course_id','price_before','price_after','points',
//        'status','payment_status','type'
//    ];
}
