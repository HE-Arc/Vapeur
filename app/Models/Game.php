<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'publisher',
        'developer',
        'release_date',
        'age_rating',
        'description',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function fav()
    {
        return $this->belongsToMany(User::class);
    }
}
