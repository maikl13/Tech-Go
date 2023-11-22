<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blog";

    protected $fillable = ["title_ar","title_en","content_ar","content_en","image", "category_id"];
}
