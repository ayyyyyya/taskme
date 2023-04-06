<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class GoogleController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback() {
        try {
            $googleUser = Socialite::driver('google')->user();
            $findUser = User::where('google_id', $googleUser->id)->first();

            if($findUser) {
                Auth::login($findUser);
                return redirect()->intended('/');
            }else {
                $newUser = User::updateOrCreate(['email' => $googleUser->email], [
                    'name' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),
                    'google_avatar' => $googleUser->getAvatar(),
                    'password' => Hash::make('password'),
                ]);

                Auth::login($newUser);
                return redirect()->intended('/');
            }

        }catch (Exception $error) {
            dd($error->getMessage());
        }
 
       
    }
}
