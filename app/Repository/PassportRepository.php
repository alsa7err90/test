<?php

namespace App\Repository;

use App\Interfaces\PassportRepositoryInterface;
use App\Models\Accommodation;
use App\Models\Companion;
use App\Models\Traveler;

class PassportRepository implements PassportRepositoryInterface
{

    public function storePassport($request)
    {
        if (isset($request['companion']) && $request['companion'] == "on") {

            $request['companion'] = "yes";
        } else {

            $request['companion'] = "no";
        }
 
        $request['email'] =  session()->get('email');
        
        $request['mobile_no'] =  session()->get('phone');
        $passport = new Traveler();
        $passport->fill($request);
        session()->put('passport', $passport);

        return  true;
    }

    public function storeCompanion($request, $traveler)
    {

        $new_companion = new Companion();
        $new_companion->first_name  =  $request['comp_first_name'];
        $new_companion->last_name  =  $request['comp_last_name'];
        $new_companion->date_of_birth  =  $request['comp_date_of_birth'];
        $new_companion->gender  =  $request['comp_gender'];
        $new_companion->place_of_birth  =  $request['comp_place_of_birth'];
        $new_companion->country_of_residency  =  $request['comp_country_of_residency'];
        $new_companion->passport_no  =  $request['comp_passport_no'];
        $new_companion->issue_date  =  $request['comp_issue_date'];
        $new_companion->expiry_date  =  $request['comp_expiry_date'];
        $new_companion->arrival_date  =  $request['comp_arrival_date'];
        $new_companion->place_of_issue  =  $request['comp_place_of_issue'];
        $new_companion->profession  =  $request['comp_profession'];
        $new_companion->organization  =  $request['comp_organization'];
        $new_companion->visa_duration  =  $request['comp_visa_duration'];
        $new_companion->visa_status  =  $request['comp_visa_status'];
        $new_companion->passport_picture  =  $request['comp_passport_picture'];
        $new_companion->personal_picture  =  $request['comp_personal_picture'];
        if ($traveler->companion()->save($new_companion))
            return true;
    }

    public function storeAccommodation($request)
    {

        $accommodation = new Accommodation();
        $accommodation->fill($request);
        session()->put('accommodation', $accommodation);
        return true;
    }

    public function storeConfirm()
    {
        $traveler = session()->get('passport'); 
        $traveler->save(); 
        if ($traveler['companion'] == "yes") {
            $this->storeCompanion(session()->get('passport'), $traveler);
        }
        $accommodation  = session()->get('accommodation');
        $new_accommodation = new Accommodation();

        $new_accommodation->traveler_id  = $traveler->id;
        $new_accommodation->check_in_date  =  $accommodation->check_in_date;
        $new_accommodation->check_out_date  =  $accommodation['check_out_date'];
        $new_accommodation->rom_type  =  $accommodation['rom_type'];
        $new_accommodation->check_in_date_extra  =  $accommodation['check_in_date_extra'];
        $new_accommodation->check_out_date_extra  =  $accommodation['check_out_date_extra'];
        $new_accommodation->rom_type_extra  =  $accommodation['rom_type_extra'];
        if ($traveler->accommodation()->save($new_accommodation)) return true;
        return false;
    }
}
