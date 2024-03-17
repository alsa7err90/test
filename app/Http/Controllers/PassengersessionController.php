<?php

namespace App\Http\Controllers;

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
        return view('passengersession.index',compact('data','passengers'));
    }

    public function create()
    {
        $passengers = Passenger::get();
        return view('passengersession.create',compact('passengers'));
    }

    public function store(PassengersessionRequest $request)
    {
        $store = $this->passengersessionService->store($request);
        if($store) return back()->with('success', "success store");
        else return back()->with('error', "failed store") ;

    }

    public function edit($PSes_ID , $Pass_ID)
    {
        $data = Passengersession::where('PSes_ID',$PSes_ID)->where('Pass_ID',$Pass_ID)->first();
        $passengers = Passenger::get();
        return view('passengersession.edit',compact('data','passengers'));
    }

    public function update(PassengersessionRequest $request, $PSes_ID , $Pass_ID)
    {
        $store = $this->passengersessionService->update($request, $PSes_ID , $Pass_ID);
        if($store) return back()->with('success', "success store");
        else return back()->with('error', "failed store") ;

    }

    public function destroy($id)
    {
        //
    }
}
