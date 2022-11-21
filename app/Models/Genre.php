<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

    public function children()
    {
        return $this->hasMany(Genre::class, 'genre_id');
    }

    public function parent()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
}
