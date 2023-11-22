<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title_ar','title_en','content_ar','content_en','image'];

}
