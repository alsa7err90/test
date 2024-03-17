<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passengerfavoritelocation extends Model
{
    use HasFactory;
    protected $table = 'passengerfavoritelocations';
    public $timestamps = false;

    public function passenger()
    {
        return $this->belongsTo(Passenger::class, 'Pass_ID');
    }
}
