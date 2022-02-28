<?php

namespace App\Http\Controllers;

use App\Mail\MailtrapAdmin;
use App\Mail\MailtrapExample;
use App\Models\Business;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserOTPController extends Controller
{
    public function showForgetPasswordForm()
      {
         return view('auth.forgetPassword');
      }

      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitAgentForm(Request $request)
      {
         // dd($request);
          $request->validate([
              'email' => 'required|email|unique:users,email',
              'business_name' => 'required|unique:businesses,',
          ]);

          $token = Str::random(64);

          DB::table('password_resets')->insert([
              'email' => $request->email,
              'token' => $token,
              'created_at' => Carbon::now()
            ]);



          $data = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'business_name' => $request->business_name,
            'business_type' => $request->business_type,
            'email' => $request->email,
            'physical_address' => $request->physical_address,
        );

        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'physical_address' => $request->physical_address,
            'email' => $request->email,
            'password' => Hash::make('1blockghana')
        ]);

       // $agentId = User::where('email',$request->email);
        foreach (User::where('email', $request->email)->cursor() as $agent) {
            Business::create([
                'user_id' => $agent->id,
                'name' =>  $request->business_name,
                'type' => $request->business_type,
                'mobile' => $request->business_phone,
                'email' => $request->business_email,
                'category_id' => 2,
                'package_id' => $request->package_id,
            ]);
        }

       // Mail::to('gabriel@manifestghana.com')->send(new MailtrapAdmin($data));
       // Mail::to($request->email)->send(new MailtrapExample($data));
       // Mail::to($request->email)->send(new MailtrapExample($data));
        Mail::send('email.otpmessage', ['token' => $token,'firstname'=>$request->firstname, 'email'=>$request->email], function($message) use($request){
            $message->to($request->email);
            $message->subject('Agent Setup Account');
        });

          return back()->with('success', 'Registration Link has been sent to the agent email');
      }
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showAgentResetPasswordForm($token) {
         return view('backend.agent.passwordReset', ['token' => $token]);
      }

      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitAgentResetPasswordForm(Request $request)
      {

          $request->validate([
              'email' => 'required|email|exists:users',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);

          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email,
                                'token' => $request->token
                              ])
                              ->first();

          if(!$updatePassword){
              return back()->withInput()->with('message', 'Invalid token!');
          }

          $user = User::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);

          DB::table('password_resets')->where(['email'=> $request->email])->delete();

          return redirect('/agent/profile')->with('message', 'Your password has been updated!');
      }
}