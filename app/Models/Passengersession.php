<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passengersession extends Model
{
    use HasFactory;
    protected $table = 'passengersessions';
    public $timestamps = false;


    public function passenger()
    {
        return $this->belongsTo(Passenger::class, 'Pass_ID');
    }

}
