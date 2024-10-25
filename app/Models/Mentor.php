<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory,Translatable;

    protected $guarded = ['id','created_at','created_at'];

    public $translatedAttributes = [
        'mentor_id',
        'name',
        'title',
        'locale',
    ];

    public $with = ['translations'];

    public function courses(){

        return $this->belongsToMany(Course::class, 'course_mentor');

    }

    public function mentor_experiences(){

        return $this->hasMany(MentorExp::class);

    }


}
