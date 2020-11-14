<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request){
        $nome = "Thiago";
        $idade = 25;
        $cidade = $request->input('cidade');

        $lista = [
            ['nome'=>'farinha', 'qt'=>'2'],
            ['nome'=>'ovo', 'qt'=>'4'],
            ['nome'=>'corante', 'qt'=>'1'],
            ['nome'=>'tompero', 'qt'=>'1']
        ];

        $data = [
            'nome' => $nome,
            'idade'=> $idade,
            'cidade'=> $cidade,
            'lista'=>$lista 
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
