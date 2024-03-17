<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        return response()->successApi(['data' => $data, 'passengers' => $passengers]);
    }

    public function store(StorePassengerFLRequest $request)
    {
        $store = $this->passengerFLService->store($request);
        if ($store) return response()->successApi($store,  "success store");
        else return response()->errorApi(  "failed store");
    }

    public function edit($PFav_ID, $Pass_ID)
    {
        $data = Passengerfavoritelocation::where('PFav_ID', $PFav_ID)->where('Pass_ID', $Pass_ID)->first();
        $passengers = Passenger::get();
        return response()->successApi(['store'=>$data,'passengers'=>$passengers] );
    }

    public function update(StorePassengerFLRequest $request, $PFav_ID, $Pass_ID)
    {
        $store = $this->passengerFLService->update($request, $PFav_ID, $Pass_ID);
        if ($store) return response()->successApi($store, "success store");
        else return response()->errorApi( "failed store");
    }

    public function destroy($id)
    {
        //
    }
}
