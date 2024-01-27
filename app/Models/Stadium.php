<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'capacity',
        'type',
    ];

    protected $casts = [
        'name' => 'string',
        'address' => 'string',
        'capacity' => 'integer',
        'type' => 'string',
    ];

    public function Clups(): object
    {
        return $this->hasMany(Clup::class);
    }

    public function Games(): object
    {
        return $this->hasMany(Game::class);
    }
}
