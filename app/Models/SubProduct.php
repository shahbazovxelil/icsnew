<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProduct extends Model
{

    use HasFactory,Translatable;


    protected $fillable = [
        'product_id',
        'msds_text',
        'msds_image',
        'tds_text',
        'tds_image',
    ];

    public $translatedAttributes = [
        'sub_product_id',
        'name',
        'locale',
    ];

    public $with = ['translations'];
}
