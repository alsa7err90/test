<?php

namespace App\Repository;
 
use App\Interfaces\PassportRepositoryInterface;
use App\Models\Companion;
use App\Models\Traveler;

class PassportRepository implements PassportRepositoryInterface 
{
    public function getAllOrders() 
    {
        // return Trve::all();
    }

    public function store_passport($request ) 
    {   
        if($request['companion'] == "on"){
        
        $request['companion'] = "yes";
            }
        else{

            $request['companion'] = "no";
        }

        
        $session_passport = session()->get('passport');
        $request['mobile_no'] =  session()->get('phone');
        $traveler = Traveler::create($request); 

        if($request['companion'] == "yes"){
            $this->storeCompanion($request, $traveler);
           
        }
        
        
        if(empty($session_passport)){
            $passport = new Traveler();
            $passport->fill($request);
             session()->put('passport', $passport);
        }else{
            $passport =  session()->get('passport');
            $passport->fill($request);
             session()->put('traveler', $passport);
        } 
        return  $traveler;
    }

     
    public function storeCompanion ($request,$traveler){
        
        $new_order = new Companion();
        $new_order->first_name  =  $request['comp_first_name'];
        $new_order->last_name  =  $request['comp_last_name'];
        $new_order->date_of_birth  =  $request['comp_date_of_birth'];
        $new_order->gender  =  $request['comp_gender'];
        $new_order->place_of_birth  =  $request['comp_place_of_birth'];
        $new_order->country_of_residency  =  $request['comp_country_of_residency'];
        $new_order->passport_no  =  $request['comp_passport_no'];
        $new_order->issue_date  =  $request['comp_issue_date'];
        $new_order->expiry_date  =  $request['comp_expiry_date'];
        $new_order->arrival_date  =  $request['comp_arrival_date'];
        $new_order->place_of_issue  =  $request['comp_place_of_issue'];
        $new_order->profession  =  $request['comp_profession'];
        $new_order->organization  =  $request['comp_organization'];
        $new_order->visa_duration  =  $request['comp_visa_duration'];
        $new_order->visa_status  =  $request['comp_visa_status'];
        $new_order->passport_picture  =  $request['comp_passport_picture'];
        $new_order->personal_picture  =  $request['comp_personal_picture']; 
        if($traveler->companion()->save($new_order))
        return true; 
    } 
}

