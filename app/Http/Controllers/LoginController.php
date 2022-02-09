<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Exception;
use Socialite;

class LoginController extends Controller
{
    //
    public function faceRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function signinFacebook()
    {
        try {
    
            $user = Socialite::driver('facebook')->user();
            $userCol = User::where('id_fb', $user->id)->first();
     
            if($userCol){
                Auth::login($userCol);
                return redirect('/dashboard');
            }else{
                $addUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'id_fb' => $user->getId()
                ]);
    
                Auth::login($addUser);
                return redirect('/dashboard');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

    public function redirectG()
    {
        return Socialite::driver('google')->redirect();
    }

    public function signinGoogle()
    {
        try {
    
            $user = Socialite::driver('google')->user();
            $userCol = User::where('id_g', $user->id)->first();
     
            if($userCol){
                Auth::login($userCol);
                return redirect('/dashboard');
            }else{
                $addUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'id_g' => $user->getId()
                ]);
    
                Auth::login($addUser);
                return redirect('/dashboard');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
