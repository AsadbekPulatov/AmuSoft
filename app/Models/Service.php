<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Service extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title_uz','description_uz','title_ru','description_ru','title_en','description_en','img'
    ];
}
