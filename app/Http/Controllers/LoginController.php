<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Validator;
use Socialite;
use Auth;

class LoginController extends Controller
{
    //
    public function redirect()
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
                    'name' => $user->name,
                    'email' => $user->email,
                    'id_fb' => $user->id,
                    'password' => encrypt('helloadmin')
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
                    'name' => $user->name,
                    'email' => $user->email,
                    'id_g' => $user->id,
                    'password' => encrypt('helloadmin')
                ]);
    
                Auth::login($addUser);
                return redirect('/dashboard');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
