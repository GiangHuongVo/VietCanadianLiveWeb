<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;   

    public function provinces()
    {
        return $this->belongsToMany(Province::class);
    }

    public function pages()
    {
        return $this->hasMany(Page::class);
    }
}
