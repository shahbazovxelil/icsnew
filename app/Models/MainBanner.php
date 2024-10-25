<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainBanner extends Model
{
    use HasFactory,Translatable;

    protected $guarded = ['id','created_at','created_at'];

    public $translatedAttributes = [
        'main_banner_id',
        'title',
        'description',
        'locale',
    ];

    public $with = ['translations'];
}
