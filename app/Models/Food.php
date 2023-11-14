<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public function setBahanAttribute($value)
    {
        $this->attributes['bahan'] = json_encode($value);
    }

    // Accessor to get the "bahan" attribute as an array when retrieving from the database
    public function getBahanAttribute($value)
    {
        return json_decode($value, true);
    }
}
