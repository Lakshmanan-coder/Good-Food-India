<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Socialite;
use Exception;
use Auth;
class FacebookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()

    {
        $provider="facebook";
        // $user = Socialite::driver('facebook')->user();
//   dump($user);
//   return $user->getName();
  
        try {
            // return "loggedin";
            $getInfo = Socialite::driver('facebook')->user();
            // dd ($getInfo);
            $user = $this->createUser($getInfo,$provider); 
            auth()->login($user); 
            // return $user;
            return redirect()->to('/');
        } catch (Exception $e) {
            return redirect('/auth/facebook');
        }
    }

        function createUser($getInfo,$provider){
        $user = User::where('facebook_id', $getInfo->id)->first();
        if (!$user) {
             $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'facebook_id' => $getInfo->id
            ]);
          }
          return $user;
        }

}