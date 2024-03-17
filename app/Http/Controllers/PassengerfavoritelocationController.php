<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePassengerFLRequest;
use App\Models\Passenger;
use App\Models\Passengerfavoritelocation;
use App\Services\PassengerFLService;

class PassengerfavoritelocationController extends Controller
{
    protected $passengerFLService;
    public function __construct(PassengerFLService $passengerFLService)
    {
        $this->passengerFLService = $passengerFLService;
    }

    public function index()
    {
        $data = $this->passengerFLService->getPassengers();
        $passengers = Passenger::get();
        return view('passengerfl.index',compact('data','passengers'));
    }

    public function create()
    {
        $passengers = Passenger::get();
        return view('passengerfl.create',compact('passengers'));
    }

    public function store(StorePassengerFLRequest $request)
    {
        $store = $this->passengerFLService->store($request);
        if($store) return back()->with('success', "success store");
        else return back()->with('error', "failed store") ;

    }

    public function edit($PFav_ID , $Pass_ID)
    {
        $data = Passengerfavoritelocation::where('PFav_ID',$PFav_ID)->where('Pass_ID',$Pass_ID)->first();
        $passengers = Passenger::get();
        return view('passengerfl.edit',compact('data','passengers'));
    }

    public function update(StorePassengerFLRequest $request,$PFav_ID , $Pass_ID)
    {
        $store = $this->passengerFLService->update($request,$PFav_ID , $Pass_ID);
        if($store) return back()->with('success', "success store");
        else return back()->with('error', "failed store") ;

    }

    public function destroy($id)
    {
        //
    }
}
