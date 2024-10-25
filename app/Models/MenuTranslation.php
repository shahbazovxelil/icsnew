<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuTranslation extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','created_at'];
    public $timestamps = false;
}
