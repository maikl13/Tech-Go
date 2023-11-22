<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";

    protected $fillable = ["title_ar","title_en","description_ar","description_en","image","position_id"];
}
