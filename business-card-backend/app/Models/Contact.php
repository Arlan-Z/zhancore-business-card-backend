<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'details',
        'message',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
