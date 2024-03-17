<?php

namespace App\Http\Controllers;

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
        return view('passenger.index',compact('data'));
    }

    public function store(StorePassengerRequest $request)
    {
        $store = $this->passengerService->store($request);
        if($store) return back()->with('success', "success store");
        else return back()->with('error', "failed store") ;

    }

    public function show($id)
    {
        $data = Passenger::findOrFail($id);
        $passengers = Passenger::get();
        return view('passenger.show',compact('data','passengers'));
    }

    public function edit($id)
    {
        $passenger = Passenger::findOrFail($id);
        return view('passenger.edit',compact('passenger'));
    }

    public function update(UpdatePassengerRequest $request, $id)
    {
        $store = $this->passengerService->update($request,$id);
        if($store) return back()->with('success', "success store");
        else return back()->with('error', "failed store") ;

    }

    public function destroy($id)
    {
        //
    }
}
