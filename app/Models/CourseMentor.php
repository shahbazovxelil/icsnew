<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMentor extends Model
{
    use HasFactory;

    protected $table = 'course_mentor';

    protected $guarded = ['id','created_at','created_at'];

    public function course(){

        return $this->belongsTo(Course::class);

    }

    public function mentor(){

        return $this->belongsTo(Mentor::class);

    }
}
