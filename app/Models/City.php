<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'name' => 'string',
    ];

    public function Clups(): object
    {
        return $this->hasMany(Clup::class);
    }

    public function Stadiums(): object
    {
        return $this->hasMany(Stadium::class);
    }

}
