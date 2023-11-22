<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeCategory extends Model
{
    protected $table = "employees_categories";

    protected $fillable = ['title_ar','title_en'];
}
