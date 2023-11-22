<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $table = "seo";

    protected $fillable = [
        "page_url",
        "seo_title_ar",
        "seo_title_en",
        "seo_description_ar",
        "seo_description_en",
        "seo_keywords_ar",
        "seo_keywords_en",
        "seo_image"
    ];
}
