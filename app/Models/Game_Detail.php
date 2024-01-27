<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Game_Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan',
        'replacement',
        'team_extra',
    ];

    protected $casts = [
        'plan' => 'string',
        'replacement' => 'string',
        'team_extra' => 'string',
    ];

    public function Image(): MorphOne
    {
        return $this->morphOne(Image::class, 'images_able');
    }
}
