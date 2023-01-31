<?php

namespace App\Http\Controllers;

use App\Http\Requests\PassportRequest;
use App\Interfaces\PassportRepositoryInterface;
use App\Mail\ComplateTestMail;
use App\Models\Traveler;
use Illuminate\Http\Request;
use Mail;
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
        if(isset($_GET['email'])){
            session()->put('email', $_GET['email']);
        }
        else{
            session()->put('email', "test4rs4it@gmail.com");
        }
       
        $phone =  session()->get('phone');
        return view('traveler.index', compact('phone'));
    }

    public function phone_store(Request $request)
    {
        session()->put('phone', $request->phone);
        return redirect('/passport');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function passport(Request $request)
    {
        $passport =  session()->get('passport');
        return view('traveler.passport', compact('passport'));
    }

    public function passport_store(PassportRequest $request)
    {

        if ($request->hasFile('personal_picture') && $request->hasFile('passport_picture')) {
            $request =   uploadImage($request);
        } else {
            $request =  $request->all();
        }

        $this->passportRepository->storePassport($request);

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

        $accommodation =  session()->get('accommodation');
        return view('traveler.accommodation', compact('accommodation'));
    }


    public function accommodation_store(Request $request)
    {


        $to = \Carbon\Carbon::parse($request->check_out_date);
        $from = \Carbon\Carbon::parse($request->check_in_date);
        $days = $to->diffInDays($from);
        if ($days <= env('FREE_NIGHT')) {
            $this->passportRepository->storeAccommodation($request->all());
            return redirect('/confirm');
        } else {
            return back()->with('error', 'the max night free you have ' . env('FREE_NIGHT') . 'nights');
        }
    }


    public function confirm(Request $request)
    {
        $passport =  session()->get('passport');
        $accommodation =  session()->get('accommodation');
        return view('traveler.confirm', compact('passport', 'accommodation'));
    }

    public function confirm_store()
    {
        $email =  session()->get('email');
        $details = [
            'title' =>  'title',
            'body' =>  "bodyxx"
        ]; 
        Mail::to($email)->send(
            new ComplateTestMail($details)
        );
        $storeConfirm =  $this->passportRepository->storeConfirm();
        if ($storeConfirm) return redirect('/finish');;
    }

    public function finish()
    {
       
        return view('traveler.finish' );
    }

    
}
