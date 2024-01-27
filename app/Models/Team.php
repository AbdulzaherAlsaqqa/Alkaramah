<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'clothes',
        'clothes_Date',
    ];

    protected $casts = [
        'name' => 'string',
        'clothes' => 'string',
        'clothes_date' => 'string',
    ];

    public function Employees(): object
    {
        return $this->hasMany(Employee::class);
    }

    public function Players(): object
    {
        return $this->hasMany(Player::class);
    }

    public function Games(): object
    {
        return $this->hasMany(Game::class);
    }

    public function Results(): object
    {
        return $this->hasMany(Result::class);
    }

    public function Arrangements(): object
    {
        return $this->hasMany(Arrangement::class);
    }

    public function Awards(): object
    {
        return $this->hasMany(Award::class);
    }

    public function Rounds(): object
    {
        return $this->belongsToMany(Round::class);
    }

    public function Image(): MorphOne
    {
        return $this->morphMany(Image::class, 'images_able');
    }


}
