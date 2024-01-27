<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthdate',
        'center',
        'long',
        'about',
        'profile',
    ];

    protected $casts = [
        'name' => 'string',
        'birthdate' => 'date',
        'center' => 'string',
        'long' => 'float',
        'about' => 'string',
        'profile' => 'string',
    ];

    public function Image(): MorphOne
    {
        return $this->morphOne(Image::class, 'images_able');
    }
}
