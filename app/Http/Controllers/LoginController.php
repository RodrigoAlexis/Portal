<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

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
            $userCol = User::where('id_socialite', $user->id)->first();
     
            if($userCol){
                Auth::login($userCol);
                return redirect('/dashboard');
            }else{
                $addUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'id_socialite' => $user->getId(),
                    'type_socialite' => 'facebook'
                ]);

                $addUser->assignRole('Usuario');
    
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
            $userCol = User::where('id_socialite', $user->id)->first();
     
            if($userCol){
                Auth::login($userCol);
                return redirect('/dashboard');
            }else{
                $addUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'id_socialite' => $user->getId(),
                    'type_socialite' => 'google'
                ]);

                $addUser->assignRole('Usuario');
    
                Auth::login($addUser);
                return redirect('/dashboard');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
