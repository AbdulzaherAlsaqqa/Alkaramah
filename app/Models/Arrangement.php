<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrangement extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_name',
        'play',
        'win',
        'equal',
        'lost',
        'points',
    ];

    protected $casts = [
        'team_name' => 'string',
        'play' => 'integer',
        'win' => 'integer',
        'equal' => 'integer',
        'lost' => 'integer',
        'points' => 'integer',
    ];
}
