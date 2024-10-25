<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorExp extends Model
{
    use HasFactory,Translatable;


    protected $guarded = ['id','created_at','created_at'];

    public $translatedAttributes = [
        'mentor_exp_id',
        'name',
        'locale',
    ];

    public $with = ['translations'];
}
