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
    // 1 index
    // 2 phone_store
    // 3 passport
    // 4 passport_store
    // 5 accommodation
    // 6 accommodation_store
    // 7 confirm
    // 8 confirm_store
    // 9 finish

    private PassportRepositoryInterface $passportRepository;

    public function __construct(PassportRepositoryInterface $passportRepository)
    {
        $this->passportRepository = $passportRepository;
    }

    // 1
    public function index(Request $request)
    {
        if (isset($_GET['email'])) {
            session()->put('email', $_GET['email']);
        } else {
            session()->put('email', "test4rs4it@gmail.com");
        } 
        $phone =  session()->get('phone');
        return view('traveler.index', compact('phone'));
    }
    // 2
    public function phone_store(Request $request)
    {
        session()->put('phone', $request->phone);
        return redirect('/passport');
    }
    // 3
    public function passport(Request $request)
    {
        $passport =  session()->get('passport');
        return view('traveler.passport', compact('passport'));
    }
    // 4 
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
    // 5
    public function accommodation(Request $request)
    { 
        $accommodation =  session()->get('accommodation');
        return view('traveler.accommodation', compact('accommodation'));
    }

    // 6
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

    // 7
    public function confirm(Request $request)
    {
        $passport =  session()->get('passport');
        $accommodation =  session()->get('accommodation');
        return view('traveler.confirm', compact('passport', 'accommodation'));
    }

    // 8
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
    // 9
    public function finish()
    {
        return view('traveler.finish');
    }
}
