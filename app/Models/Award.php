<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'type',
        'name',
    ];

    protected $casts = [
        'date' => 'date',
        'type' => 'string',
        'name' => 'string',
    ];
}
