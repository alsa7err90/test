<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PassengersessionRequest;
use App\Models\Passenger;
use App\Models\Passengersession;
use App\Services\PassengersessionService;

class PassengersessionController extends Controller
{
    protected $passengersessionService;
    public function __construct(PassengersessionService $passengersessionService)
    {
        $this->passengersessionService = $passengersessionService;
    }

    public function index()
    {
        $data = $this->passengersessionService->getPassengers();
        $passengers = Passenger::get();
        return response()->successApi(['data'=>$data,'passengers'=>$passengers]);
    }

    public function store(PassengersessionRequest $request)
    {
        $store = $this->passengersessionService->store($request);
        if($store) return response()->successApi($store, "success store");
        else return response()->errorApi( "failed store") ;

    }

    public function edit($PSes_ID , $Pass_ID)
    {
        $data = Passengersession::where('PSes_ID',$PSes_ID)->where('Pass_ID',$Pass_ID)->first();
        $passengers = Passenger::get();
        response()->successApi([
            'data'=>$data,
            'passengers'=>$passengers
        ], "success store");
    }

    public function update(PassengersessionRequest $request, $PSes_ID , $Pass_ID)
    {
        $store = $this->passengersessionService->update($request, $PSes_ID , $Pass_ID);
        if($store) return response()->successApi($store, "success store");
        else return response()->errorApi( "failed store") ;

    }

    public function destroy($id)
    {
        //
    }
}
