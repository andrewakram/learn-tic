<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verfication extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'code', 'type', 'expired_at'
    ];
}
