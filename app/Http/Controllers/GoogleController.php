<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback() {
        $user = Socialite::driver('google')->stateless()->user();
            // dd($user->id);
            $finduser = User::where('google_id',$user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }  
                else{
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id' => $user->id,
                        'phone_number' => "081262767570",
                        'password' => bcrypt('12345678'),
                    ]);

                    Auth::login($newUser);
                    return redirect()->intended('dashboard');
                }
        
    }
}
