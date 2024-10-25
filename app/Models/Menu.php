<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory,SoftDeletes,Translatable;

    protected $guarded = ['id','created_at','created_at'];

    public $translatedAttributes = [
        'name',
        'slug',
    ];

    public $with = ['translations'];


    // Alt menyular
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }
}
