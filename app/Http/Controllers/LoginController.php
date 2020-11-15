<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $creds = $request->only(['email', 'password']);

        $request->validate([
            'email' => [ 'required', 'email' ]
        ]);

        if(Auth::attempt($creds)){
            return redirect()->route('config.index');
        } else{
            return redirect()->route('login')
                ->with('warning','E-mail e/ou Senha invalidos.');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
