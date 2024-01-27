<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'post',
        'image_post',
    ];

    protected $casts = [
        'title' => 'string',
        'post' => 'string',
        'image_post' => 'string',
    ];

    public function Notification(): object
    {
        return $this->hasOne(Notification::class);
    }

    public function Comments(): object
    {
        return $this->hasMany(Comment::class);
    }

    public function Images(): MorphMany
    {
        return $this->morphMany(Image::class, 'images_able');
    }
}
