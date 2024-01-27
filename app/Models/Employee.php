<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'age',
        's_contracting',
        'e_contracting',
    ];

    protected $casts = [
        'name' => 'string',
        'position' => 'string',
        'age' => 'integer',
        's_contracting' => 'date',
        'e_contracting' => 'date',
    ];
}
