<?php

namespace App\Http\Controllers;

use App\Mail\MarkdownTestMail;
use App\Models\Traveler;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;

class AdminController  extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $travelers = Traveler::get();
        return view('home',compact('travelers'));
    }
    
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
    public function show($id)
    {
        $traveler = Traveler::whereId($id)->first();
        return view('admin.traveler.view',compact('traveler'));
    }

    public function config()
    {
       
        return view('admin.config');
    }
    public function config_update(Request $request)
    {
        setEnv('FREE_NIGHT', $request->post('FREE_NIGHT'));
        return back()->with('success', 'Settings updated');
    }

   
    public function processing($id)
    {
        Traveler::whereId($id)->update(array('status' => 'processing'));
        return redirect()->back()->with('success', 'convert to processing');   
    }
    
    public function completed($id)
    {
        Traveler::whereId($id)->update(array('status' => 'completed'));
        return redirect()->back()->with('success', 'convert to completed');   
    }
    public function destroy($id)
    {
        $traveler = Traveler::whereId($id);
        $traveler->delete();
        return redirect()->back()->with('success', 'success delete'); 
    }
    
}
