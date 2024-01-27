<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    use HasFactory;

    protected $fillable = [
        'vision',
        'purpose',
        'pillars',
        'principles',
    ];

    protected $casts = [
        'vision' => 'string',
        'purpose' => 'string',
        'pillars' => 'string',
        'principles' => 'string',
    ];
}
