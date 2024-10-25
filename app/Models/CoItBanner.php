<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoItBanner extends Model
{
    use HasFactory,Translatable;

    protected $guarded = ['id','created_at','created_at'];

    public $translatedAttributes = [
        'co_it_banner_id',
        'title',
        'short_description',
        'long_description',
        'item_one',
        'item_two',
        'item_three',
        'item_four',
        'locale',
    ];

    public $with = ['translations'];
}
