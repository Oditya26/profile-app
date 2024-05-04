<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as Hashing;

class LoginController extends Controller
{
    //
    
    public function authenticate(Request $request) {
        if(Auth::attempt(
            [
                'email' => $request->email,
                'password' => $request->password
            ])){
                return redirect('home');
            }else {
                return redirect()->
                back()
                ->withErrors(['message' => 'User not found'])
                ->withInput();
            }
    }

    public function registration(Request $request) {
        $user = new \App\Models\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hashing::make($request->password);
        $user->save();

        return redirect('login');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
