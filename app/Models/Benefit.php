<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory,Translatable;

    protected $guarded = ['id','created_at','created_at'];

    public $translatedAttributes = [
        'service_id',
        'title',
        'description',
        'locale',
    ];

    public $with = ['translations'];
}
