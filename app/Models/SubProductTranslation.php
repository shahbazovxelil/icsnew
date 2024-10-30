<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProductTranslation extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_product_id',
        'name',
        'title',
        'locale',
    ];

}
