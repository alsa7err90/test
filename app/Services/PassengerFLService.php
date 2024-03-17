<?php

namespace App\Services;

use App\Models\Passengerfavoritelocation;
use Illuminate\Support\Facades\DB;

class PassengerFLService
{

    public function getPassengers()
    {
         return Passengerfavoritelocation::get();
    }
    public function store($request)
    {
       $passenger = new Passengerfavoritelocation();
       $passenger->Pass_ID = $request->Pass_ID;
       $passenger->PFav_ID = $request->PFav_ID;
       $passenger->PFav_Longitude = $request->PFav_Longitude;
       $passenger->PFav_Latitude = $request->PFav_Latitude;
       $passenger->PFav_Name = $request->PFav_Name;
       if($passenger->save()) return true;
       return false;

    }

    public function update($request , $PFav_ID , $Pass_ID)
    {

        $passenger = DB::table('passengerfavoritelocations')
        ->where('PFav_ID',$PFav_ID)
        ->where('Pass_ID',$Pass_ID)
        ->update([
            'Pass_ID' => $request->Pass_ID,
            'PFav_ID' => $request->PFav_ID,
            'PFav_Longitude' => $request->PFav_Longitude,
            'PFav_Latitude' => $request->PFav_Latitude,
            'PFav_Name' => $request->PFav_Name,
        ]);


        if($passenger) return true;
        return false;

    }

    public function delete($id)
    {
        // Delete the user from the database
    }
}
