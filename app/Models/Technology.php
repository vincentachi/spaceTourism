<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        'picture',
        'name_fr',
        'name_en',
        'description_fr',
        'description_en',
    ];
}