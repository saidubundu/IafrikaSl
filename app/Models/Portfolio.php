<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    public function getImagePathAttribute()
    {
        return ("/storage/$this->cover_photo");
    }

    public function getYoutubeAttribute()
    {
        return ("https://www.youtube.com/embed/$this->link");
    }
}
