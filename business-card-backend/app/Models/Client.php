<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'review',
        'imageUrl',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
