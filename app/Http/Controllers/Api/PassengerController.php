<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePassengerRequest;
use App\Http\Requests\UpdatePassengerRequest;
use App\Models\Passenger;
use App\Services\PassengerService;

class PassengerController extends Controller
{
    protected $passengerService;
    public function __construct(PassengerService $passengerService)
    {
        $this->passengerService = $passengerService;
    }

    public function index()
    {
        $data = $this->passengerService->getPassengers();
        return response()->successApi($data);
    }

    public function store(StorePassengerRequest $request)
    {
        $store = $this->passengerService->store($request);
        if($store) return response()->successApi($store,__('success store')) ;
        else return response()->errorApi(__("failed store")) ;

    }


    public function show($id)
    {
        $data = Passenger::with('passengerfl')->with('passengersessions')->findOrFail($id);
        $passengers = Passenger::get();

        return response()->successApi(['data'=>$data , 'passengers'=>$passengers]);
    }

    public function edit($id)
    {
        $passenger = Passenger::findOrFail($id);
        return  response()->successApi(['data'=>$passenger , 'passengers'=>$passenger]);
     }

    public function update(UpdatePassengerRequest $request, $id)
    {
        $store = $this->passengerService->update($request,$id);
        if($store) return response()->successApi('success', "success store");
        else return response()->errorApi(__("failed store")) ;

    }

    public function destroy($id)
    {
        //
    }
}
