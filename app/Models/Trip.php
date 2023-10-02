<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'continent', 'period', 'country_id', 'description', 'price', 'img'];

    protected $attributes = [
        'period' => 7,
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
