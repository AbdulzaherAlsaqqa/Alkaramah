<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'about',
        'images',
    ];

    protected $casts = [
        'name' => 'string',
        'about' => 'string',
        'images' => 'string',
    ];

    public function Fan_Members(): object
    {
        return $this->hasMany(Fan_Member::class);
    }

    public function Images(): MorphMany
    {
        return $this->morphMany(Image::class, 'images_able');
    }
}
