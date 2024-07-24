<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Qui i campi che vogiamo abilitare al mass update
    protected $fillable = ['title', 'content', 'slug'];

    // Qui i campi che non vogliamo abilitare al mass update
    // protected $guarded = [];
}

