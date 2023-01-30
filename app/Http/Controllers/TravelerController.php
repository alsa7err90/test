<?php

namespace App\Http\Controllers;

use App\Interfaces\PassportRepositoryInterface;
use App\Models\Traveler;
use Illuminate\Http\Request;

class TravelerController extends Controller
{
    private PassportRepositoryInterface $passportRepository;

    public function __construct(PassportRepositoryInterface $passportRepository) 
    {
        $this->passportRepository = $passportRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $phone = $request->session()->get('phone');
        return view('traveler.index',compact('phone') );
    }

    public function phone_store(Request $request){ 
        $request->session()->put('phone', $request->phone); 
        return redirect('/passport');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function passport(Request $request)
    {   
        $passport = $request->session()->get('passport'); 
        return view('traveler.passport',compact('passport') );
    }
    
    public function passport_store(Request $request){
       
        $validatedData = $request->validate([
            'first_name' => 'required',
           
        ]);
        $request2 =  $request->all(); 
        if(empty($request->session()->get('passport'))){
            $passport = new Traveler();
            $passport->fill($request2);
            $request->session()->put('passport', $passport);
        }else{
            $passport = $request->session()->get('passport');
            $passport->fill($request2);
            $request->session()->put('traveler', $passport);
        } 
        return redirect('/accommodation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function accommodation(Request $request)
    {
        $accommodation = $request->session()->get('accommodation');
        return view('traveler.accommodation',compact('accommodation') );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function show(Traveler $traveler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function edit(Traveler $traveler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Traveler $traveler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Traveler  $traveler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Traveler $traveler)
    {
        //
    }
}
