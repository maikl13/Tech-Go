<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";

    protected $fillable = [
        "title_ar",
        "title_en",
        "content_ar",
        "content_en",
        "icon"
    ];
}
