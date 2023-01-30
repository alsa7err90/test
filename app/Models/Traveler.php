<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'mobile_no', 
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'place_of_birth',
        'country_of_residency',
        'passport_no',
        'issue_date',
        'expiry_date',
        'place_of_issue',
        'arrival_date',
        'profession',
        'organization',
        'visa_duration',
        'visa_status',
        'passport_picture',
        'personal_picture',
        'companion' 
      ];
    public function companion()
    {
        return $this->hasOne(Companion::class);
    }
    public function accommodation()
    {
        return $this->hasOne(Accommodation::class);
    }
}
