<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory,Translatable;


    protected $guarded = [];

    public $translatedAttributes = [
        'structure_id',
        'title',
        'description',
        'locale',
    ];

    public $with = ['translations'];
}
