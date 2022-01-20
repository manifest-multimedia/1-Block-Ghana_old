<?php

namespace App\Http\Controllers;

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

        Mail::to('gabriel@manifestghana.com')->send(new MailtrapExample($data));
        return back()->with('success','Your request has been sent.');
      //  return view('backend.agent.add');
    }
}