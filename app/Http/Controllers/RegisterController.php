<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('register');
    }

    public function sucess(){
        return view('sucess');
    }    

    public function register(Request $request){
        $data = $request->only(['name', 'cliCGC', 'birthday', 'gender', 'cellphone', 'cep', 'address', 'numberAdress', 
            'additionalinfo', 'reference', 'neiborhood', 'city', 'state', 'email', 'password', 'password_confirmation']);
        
        if (strlen($data['cliCGC']) > 14){
            $this->validate($request, [
                'cliCGC' => 'required|cnpj',
            ]);
        }else{
            $this->validate($request, [
                'cliCGC' => 'required|cpf',
            ]);
        }

        $request->validate([
            'name' => [ 'required', 'string', 'max:100' ],
            'cliCGC' => [ 'required', 'string', 'max:18', 'unique:users' ],
            'birthday' => [ 'required', 'string', 'max:50' ],
            'cellphone' => [ 'required', 'max:16' ],
            'cep' => [ 'required', 'max:9' ],
            'address' => [ 'required', 'string', 'max:80' ],
            'numberAdress' => [ 'required', 'string', 'max:80' ],
            'additionalinfo' => [ 'max:80' ],
            'reference' => [ 'max:80' ],
            'neiborhood' => [ 'required', 'string', 'max:50' ],
            'city' => [ 'required', 'string', 'max:50' ],
            'state' => [ 'required', 'string', 'max:2' ],
            'email' => [ 'required', 'email', 'unique:users', 'max:200' ],
            'password' => [ 'required', 'string', 'min:4', 'confirmed', 'max:100' ]
        ]);
        

        /*$name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));*/

        /*$t = new User;
        $t->name     = $name;
        $t->email    = $email;
        $t->password = $password;
        $t->save();*/

        $user = User::create([
            'name' => $data['name'],
            'cliCGC' => $data['cliCGC'],
            'birthday' => $data['birthday'],
            'cellphone' => $data['cellphone'],
            'cep' => $data['cep'],
            'address' => $data['address'],
            'numberAdress' => $data['numberAdress'],
            'additionalinfo' => $data['additionalinfo'],
            'reference' => $data['reference'],
            'neiborhood' => $data['neiborhood'],
            'city' => $data['city'],
            'state' => $data['state'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        Auth::login($user);

        return view('sucess');
    }
}