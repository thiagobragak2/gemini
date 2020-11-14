<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadController extends Controller
{
    public function list(){
        $list = DB::select('SELECT * FROM CLIENTES');

        return view ('tarefas.list', [
            'list' => $list
        ]);
    }

    public function add(){
        return view ('tarefas.add');    
    }

    public function addAction(Request $request){
        $request->validate([
            'nome' => [ 'required', 'string' ],
            'email' => [ 'required', 'email' ]
        ]);

        $nome = $request->input('nome');
        $email = $request->input('email');

        DB::insert('INSERT INTO clientes (nome, email) VALUES (:nome, :email)', [
            'nome'=>$nome,
            'email'=>$email
        ]);

        return redirect()->route('tarefas.list');        
    }

    public function edit($id){
        $data = DB::select('SELECT nome, email FROM clientes WHERE id = :id', [
            'id'=>$id
        ]);

        if (count($data)>0){
            return view('tarefas.edit', [
                'data' => $data[0]
            ]);
        } else {
            return redirect()->route('tarefas.list');
        }

        return view ('tarefas.edit');
    }

    public function editaction(Request $request, $id){
        $request->validate([
            'nome' => [ 'required', 'string' ],
            'email' => [ 'required', 'email' ]
        ]);

        $nome = $request->input('nome');
        $email = $request->input('email');

        DB::update('UPDATE CLIENTES SET nome = :nome, email = :email WHERE id =:id', [
            'nome' =>$nome,
            'email'=>$email,
            'id'   =>$id
        ]);

        return redirect()->route('tarefas.list');
    }

    public function del($id){
        DB::delete('DELETE FROM clientes WHERE id = :id', [
            'id' => $id
        ]);

        return redirect()->route('tarefas.list');
        
    }    
}
