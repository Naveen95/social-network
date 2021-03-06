<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use App\SocialAccountService;

class SocialAuthController extends Controller 
{
    
public function redirect($provider)
{
	return Socialite::driver($provider)->redirect();
}

use \Illuminate\Auth\Authenticatable;

public function callback(SocialAccountService $service , $provider)
    {
        $user = $service->createOrGetUser(Socialite::driver($provider));

        auth()->login($user);

        return redirect()->to('/home');
    }

}
