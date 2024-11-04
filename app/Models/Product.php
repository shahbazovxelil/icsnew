<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Translatable;


    protected $fillable = ['id', 'image','image_back_color'];
    public $with = ['translations'];

    public array $translatedAttributes = [
        'title',
        'description',
        'locale',
    ];



}
