<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public function getImagePathAttribute()
    {
        return ("/storage/$this->featured_photo");
    }
}
