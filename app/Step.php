<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = [
        "title_ar",
        "title_en",
        "description_ar",
        "description_en",
        "icon"
    ];
}
