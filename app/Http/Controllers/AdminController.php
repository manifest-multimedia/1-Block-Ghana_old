<?php

namespace App\Http\Controllers;

use App\Mail\MailtrapAdmin;
use App\Mail\MailtrapExample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function signUpRequest(Request $request){
      //  dd($request);

        $data = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'business_name' => $request->business_name,
            'business_type' => $request->business_type,
            'email' => $request->email,
            'physical_address' => $request->physical_address,
        );
        //dd($data);
        Mail::to('admin@1blockghana.com')->send(new MailtrapAdmin($data));
        Mail::to($request->email)->send(new MailtrapExample($data));
       // return back()->with('success','Your request has been sent.');
        return redirect()->route('request.status');
    }
}