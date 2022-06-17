<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function teacher(){
        return $this->belongsTo(About::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
