<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'Gatunek', 'Odcinki', 'description', 'price', 'img', 'id_studia'];

    protected $attributes = [
        'Odcinki' => 7,
    ];

    public function studio()
    {
        return $this->belongsTo(Studio::class);
    }
}
