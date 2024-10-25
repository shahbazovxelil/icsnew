<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory,Translatable;

    protected $guarded = ['id','created_at','created_at'];

    public $translatedAttributes = [
        'name',
        'category_id',
        'slug',
        'locale',
    ];

    public $with = ['translations'];

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id');

    }
}
