<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        "banner_title_ar",
        "banner_title_en",
        "banner_description_ar",
        "banner_description_en",
        "banner_image",
        "about_title_ar",
        "about_title_en",
        "about_description_ar",
        "about_description_en",
        "about_logo",
        "about_video",
        "about_apps_count",
        "about_websites_count",
        "about_clients_count",
        "our_goal_ar",
        "our_goal_en",
        "about_experience_years",
        "website_title_ar",
        "website_title_en",
        "banner_image_en",
        "about_video_en"
    ];
}
