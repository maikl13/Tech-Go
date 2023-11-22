<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        "title_ar",
        "title_en",
        "description_ar",
        "description_en",
        "category",
        "website_url",
        "google_play_url",
        "app_store_url",
        "image",
        "price",
        "type",
    ];
}
