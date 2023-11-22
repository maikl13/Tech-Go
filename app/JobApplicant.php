<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplicant extends Model
{
    protected $table = "jobs_applicants";

    protected $fillable = ["name","phone","email","description","cv","job_id"];
}
