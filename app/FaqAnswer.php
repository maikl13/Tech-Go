<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaqAnswer extends Model
{
    protected $table = "faq_answers";

    protected $fillable = ['faq_id','answer_ar','answer_en'];
}
