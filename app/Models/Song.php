<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{

    protected $fillable = [
        'name',
        'artists',
        'album',
        'duration',
    ];

}
