<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Clup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'establishment',
        'address',
        'founder_name',
        'idea',
        'first_fan',
        'reputation',
        'Football',
    ];

    protected $casts = [
        'name' => 'string',
        'logo' => 'string',
        'establishment' => 'string',
        'address' => 'string',
        'founder_name' => 'string',
        'idea' => 'string',
        'first_fan' => 'date',
        'reputation' => 'string',
        'Football' => 'string',
    ];


    public function Strategy(): object
    {
        return $this->hasOne(Strategy::class);
    }

    public function Fun(): object
    {
        return $this->hasOne(Fan::class);
    }

    public function Images(): MorphMany
    {
        return $this->morphOne(Image::class, 'images_able');
    }


}
