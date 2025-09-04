<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'cover_image',
        'drink',
        'food',
        'relax',
        'duration',
    ];

    public function prices() {
        return $this->hasMany(Price::class);
    }
}
