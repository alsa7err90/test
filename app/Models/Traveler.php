<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function companion()
    {
        return $this->hasOne(Companion::class);
    }
    public function accommodation()
    {
        return $this->hasOne(Accommodation::class);
    }
}
