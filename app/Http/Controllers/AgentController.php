<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view(){
        $agents = User::all();
        dd($agents);
        return view('backend.agent.view',compact('agents'));
    }

    public function addAgent(){
        $packages = Package::all();
        return view('backend.agent.add',compact('packages'));
    }

    public function postAgent(Request $request){

        /* User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'physical_address' => $request->physical_address,
        ]); */

       /*  $user = User::where('email', $request->email)->first();
        $token = Password::getRepository()->create($user);
        $user->sendPasswordResetNotification($token);
 */
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));
        dd($status);
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);


    }

    public function agentProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.agent.profile',compact('user'));
    }

}