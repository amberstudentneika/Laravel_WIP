<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSelection extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'course_id',
        'enroll_dt',
        'is_approved'
    ];

    function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    function courses(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
