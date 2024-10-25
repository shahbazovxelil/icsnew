<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DbCBanner extends Model
{
    use HasFactory,Translatable;

    protected $guarded = ['id','created_at','created_at'];

    public $translatedAttributes = [
        'db_c_banner_id',
        'title',
        'short_description',
        'long_description',
        'item_one_text',
        'item_two_text',
        'item_three_text',

        'middle_title',
        'middle_description',
        'middle_text_one',
        'middle_text_two',
        'middle_text_three',
        'locale',
    ];

    public $with = ['translations'];
}
