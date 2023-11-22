<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = "faq";

    protected $fillable = ['question_ar','answer_ar','question_en','answer_en'];
}
