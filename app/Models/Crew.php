<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    protected $fillable = [
        'picture',
        'job_fr',
        'job_en',
        'name',
        'description_fr',
        'description_en',
    ];
}