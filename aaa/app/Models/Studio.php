<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'year', 'workers', 'ceo', 'country'];

    public $timestamps = false;

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
