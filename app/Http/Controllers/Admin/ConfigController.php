<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $list = User::all();
        $nome = $user->name;
        $idade = 25;
        $cidade = $request->input('cidade');

        $data = [
            'nome' => $nome,
            'idade'=> $idade,
            'cidade'=> $cidade,
            'lista'=>$list
        ];

        return view('admin.config', $data);
    }

    public function info(){
        echo "CONFIGURACOES INFO";
    }

    public function permissoes(){
        echo "CONFIGURACOES PERMISSOES";
    }
}
