<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $table = 'passengers';

    //  PassengerFavoriteLocation
    public function passengerfl()
    {
        return $this->hasMany(PassengerFavoriteLocation::class, 'Pass_ID');
    }

    // PassengerSession
    public function passengersessions()
    {
        return $this->hasMany(PassengerSession::class, 'Pass_ID');
    }

}
