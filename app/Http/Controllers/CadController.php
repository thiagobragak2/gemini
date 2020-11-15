<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\USER;

class CadController extends Controller
{
    public function list(){
        //$list = DB::select('SELECT * FROM CLIENTES');
        $list = USER::all();

        return view ('tarefas.list', [
            'list' => $list
        ]);
    }

    public function add(){
        return view ('tarefas.add');    
    }

    public function addAction(Request $request){
        $request->validate([
            'name' => [ 'required', 'string' ],
            'email' => [ 'required', 'email' ]
        ]);

        $name = $request->input('name');
        $email = $request->input('email');

        $t = new USER;
        $t->name = $name;
        $t->email= $email;
        $t->save();

        return redirect()->route('tarefas.list');        
    }

    public function edit($id){
        $data = USER::find($id);

        if ($data){
            return view('tarefas.edit', [
                'data' => $data
            ]);
        } else {
            return redirect()->route('tarefas.list');
        }

        return view ('tarefas.edit');
    }

    public function editaction(Request $request, $id){
        $request->validate([
            'name' => [ 'required', 'string' ],
            'email' => [ 'required', 'email' ]
        ]);

        $name = $request->input('name');
        $email = $request->input('email');

        USER::find($id)->update([
            'name'=>$name,
            'email'=>$email
        ]);

        return redirect()->route('config.index');
    }

    public function del($id){
        USER::find($id)->delete();

        return redirect()->route('config.index');
        
    }    
}
