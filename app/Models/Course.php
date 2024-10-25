<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory,Translatable;

    protected $guarded = ['id','created_at','created_at'];

    public $translatedAttributes = [
        'course_id',
        'name',
        'locale',
    ];

    public $with = ['translations'];


    public function mentors(){

        return $this->belongsToMany(Mentor::class, 'course_mentor');

    }
    public function structures(){

        return $this->hasMany(Structure::class);

    }

    public function benefits(){

        return $this->hasMany(Benefit::class);

    }

    public function course_item_banner(){

        return $this->hasOne(CoItBanner::class);

    }

    public function what_learns(){

        return $this->hasMany(WhatLearn::class);

    }
}
