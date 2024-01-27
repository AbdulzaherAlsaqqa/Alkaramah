<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_notification',
    ];

    protected $casts = [
        'title' => 'string',
        'image_notification' => 'string',
    ];

    public function Images(): MorphOne
    {
        return $this->morphOne(Image::class, 'images_able');
    }
}
