<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

class ProviderController extends Controller
{
    public function redirect($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider){
        try{
            $SocialUser = Socialite::driver($provider)->user();
            if(User::where('email', $SocialUser->getEmail())->exists()){
                return redirect('/login')->withErrors(['emails' => 'The email uses different to login']);
            }
            $user = User::where([
                'provider' => $provider,
                'provider_id' => $SocialUser->id,
            ])->first( );
            if(!$user){
                $user = User::create([
                    'provider_id' => $SocialUser->getId(),
                    'provider' => $provider,
                    'name' => $SocialUser->getName(),
                    'username' => User::generateUsername($SocialUser->getNickname()),
                    'email' => $SocialUser->getEmail(),
                    'provider_token' => $SocialUser->token,
                    'email_verified_at' => now()
                ]);
            }

            Auth::login($user);

            return redirect('/dashboard');
        }
        catch(Exception $e){
            return redirect('/login');
        }

    }
}
