<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Twilio\Rest\Client;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'number',
        'isVerified',

        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /////////////////////////////////////generatedCode
    public function generateCode()
    {
        $code = rand(100000, 999999);

        VerificationCode::updateOrCreate([
            'user_id' => auth()->user()->id,
            'otp' => $code
        ]);

        $receiverNumber = auth()->user()->number;
        $message = "Your Login OTP code is ". $code;

        try {
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $number = getenv("TWILIO_FROM");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $number,
                'body' => $message]);

        } catch (\Exception $e) {
            //
        }
    }
}

