<?php

namespace App\Http\Controllers;

use App\Models\User;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    protected function create(Request $request)
    {
    $data = $request->validate([
        'number' => 'required|exists:users,number'
    ]);
       /* Get credentials from .env */
       $token = getenv("TWILIO_AUTH_TOKEN");
       $twilio_sid = getenv("TWILIO_SID");
       $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");

       $twilio = new Client($twilio_sid, $token);

       $twilio->verify->v2->services($twilio_verify_sid)
           ->verifications
           ->create($data['number'], "sms");
           return "hi";
           return redirect()->route('verify')->with(['number' => $data['number']]);
}
protected function verify(Request $request)
{
    $data = $request->validate([
        'verification_code' => ['required', 'numeric'],
        'number' => ['required', 'string'],
    ]);
    /* Get credentials from .env */
    $token = getenv("TWILIO_AUTH_TOKEN");
    $twilio_sid = getenv("TWILIO_SID");
    $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
    $twilio = new Client($twilio_sid, $token);
    $verification = $twilio->verify->v2->services($twilio_verify_sid)
        ->verificationChecks
        ->create($data['verification_code'], array('to' => $data['number']));
    if ($verification->valid) {
        $user = tap(User::where('number', $data['number']))->update(['isVerified' => true]);
        /* Authenticate user */
        Auth::login($user->first());
        return redirect()->route('home')->with(['message' => 'Phone number verified']);
    }
    return back()->with(['number' => $data['number'], 'error' => 'Invalid verification code entered!']);
}

}
