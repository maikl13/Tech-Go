<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRequest extends Model
{
    protected $fillable = ["name","phone","email","subject","message",
        "company_name",
        "company_location",
        "phone_whatsapp"

    ];
}
