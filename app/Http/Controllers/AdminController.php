<?php

namespace App\Http\Controllers;

use App\Mail\MarkdownTestMail;
use App\Models\Traveler;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;

class AdminController  extends Controller
{ 
    // 1 index 
    // 2 send_inv
    // 3 show
    // 4 config
    // 5 config_update
    // 6 processing
    // 7 completed
    // 8 destroy

    public function __construct()
    {
        $this->middleware('auth');
    }
    // 1
    public function index()
    {
        $travelers = Traveler::get();
        return view('home',compact('travelers'));
    }
    // 2 
    public function send_inv(Request $request)
    {       $email = $request->to;
         $details = [
            'title' =>  'title',
            'body' =>  "bodyxx",
            'email' => $email
        ]; 
        Mail::to($email)->send(
            new MarkdownTestMail($details)
        );
        return redirect()->back()->with('success', 'success send email');  
    }
    // 3
    public function show($id)
    {
        $traveler = Traveler::whereId($id)->first();
        return view('admin.traveler.view',compact('traveler'));
    }
    // 4
    public function config()
    { 
        return view('admin.config');
    }
    // 5
    public function config_update(Request $request)
    {
        setEnv('FREE_NIGHT', $request->post('FREE_NIGHT'));
        return back()->with('success', 'Settings updated');
    }

    // 6
    public function processing($id)
    {
        Traveler::whereId($id)->update(array('status' => 'processing'));
        return redirect()->back()->with('success', 'convert to processing');   
    }
    // 7 
    public function completed($id)
    {
       $traveler =  Traveler::whereId($id)->update(array('status' => 'completed'));
        // $email =  session()->get('email');
        // $details = [
        //     'title' =>  'title',
        //     'body' =>  "bodyxx"
        // ]; 
        // Mail::to($email)->send(
        //     new ComplateTestMail($details)
        // ); 
        return redirect()->back()->with('success', 'convert to completed');   
    }
    // 8
    public function destroy($id)
    {
        $traveler = Traveler::whereId($id);
        $traveler->delete();
        return redirect()->back()->with('success', 'success delete'); 
    }
    
}
