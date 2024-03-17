<?php

namespace App\Services;

use App\Models\Passenger;

class PassengerService
{

    public function getPassengers()
    {
         return Passenger::get();
    }
    public function store($request)
    {
        //
        $lastId = Passenger::max('id');
       $passenger = new Passenger();
       $passenger->id = $lastId + 1;
       $passenger->FirstName = $request->FirstName;
       $passenger->SecondName = $request->SecondName;
       $passenger->LastName = $request->LastName;
       $passenger->PhoneNumber = $request->PhoneNumber;
       $passenger->password = bcrypt($request->password);
       $passenger->Email = $request->Email;
       $passenger->GenderM = $request->GenderM;
       $passenger->BirthDate = $request->BirthDate;
       $passenger->Rank = $request->Rank;
       $passenger->Rating = $request->Rating;
       $passenger->Balance = $request->Balance;
       $passenger->Flags = $request->Flags;
       $passenger->Status = $request->Status;
       $passenger->Language = $request->Language;
       if($passenger->save()) return true;
       return false;

    }

    public function update($request , $id)
    {

        $passenger = Passenger::find($id);
        $passenger->FirstName = $request->FirstName;
        $passenger->SecondName = $request->SecondName;
        $passenger->LastName = $request->LastName;
        $passenger->PhoneNumber = $request->PhoneNumber;
        if(isset($request->password))  $passenger->password = bcrypt($request->password);
        $passenger->Email = $request->Email;
        $passenger->GenderM = $request->GenderM;
        $passenger->BirthDate = $request->BirthDate;
        $passenger->Rank = $request->Rank;
        $passenger->Rating = $request->Rating;
        $passenger->Balance = $request->Balance;
        $passenger->Flags = $request->Flags;
        $passenger->Status = $request->Status;
        $passenger->Language = $request->Language;
        if($passenger->update()) return true;
        return false;

    }

    public function delete($id)
    {
        // Delete the user from the database
    }
}
