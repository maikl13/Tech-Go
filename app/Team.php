<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = "teams";

    protected $fillable = ['name_en','name_ar','description_en','description_ar','location_en','location_ar','image','link'];
}
