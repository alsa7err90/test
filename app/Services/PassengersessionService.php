<?php

namespace App\Services;

use App\Models\Passengersession;
use Illuminate\Support\Facades\DB;

class PassengersessionService
{

    public function getPassengers()
    {
         return Passengersession::get();
    }
    public function store($request)
    {
       $passenger = new Passengersession();
       $passenger->PSes_ID = $request->PSes_ID;
       $passenger->Pass_ID = $request->Pass_ID;
       $passenger->PSes_Token = $request->PSes_Token;
       $passenger->PSes_CreateDate = $request->PSes_CreateDate ?? now();
       $passenger->PSes_LastUpdate = $request->PSes_LastUpdate ?? now();
       $passenger->PSes_Longitude = $request->PSes_Longitude;
       $passenger->PSes_Latitude = $request->PSes_Latitude;
       $passenger->Pses_InstanceID = $request->Pses_InstanceID;
       if($passenger->save()) return true;
       return false;

    }

    public function update($request ,  $PSes_ID , $Pass_ID)
    {

        $passenger = DB::table('passengersessions')
        ->where('PSes_ID',$PSes_ID)
        ->where('Pass_ID',$Pass_ID)
        ->update([
            'PSes_ID' => $request->PSes_ID,
            'Pass_ID' => $request->Pass_ID,
            'PSes_Token' => $request->PSes_Token,
            'PSes_LastUpdate' => now(),
            'PSes_Longitude' => $request->PSes_Longitude,
            'PSes_Latitude' => $request->PSes_Latitude,
            'Pses_InstanceID' => $request->Pses_InstanceID,
        ]);


        if($passenger) return true;
        return false;

    }

    public function delete($id)
    {
        // Delete the user from the database
    }
}
