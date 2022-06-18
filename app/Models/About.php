<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table='abouts';
    protected  $fillable=['text_uz','text_ru','text_en','facebook','email','instagram','telegram','name','position','image'];

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
