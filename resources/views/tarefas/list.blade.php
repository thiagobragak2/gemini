@extends('layouts.admin')

@section('title', 'Listagem de Clientes')

@section('content')
    <h1>Listagem</h1>

    @if($errors->any())
        @component('components.alert')
            @foreach($errors->all() as $error)
                {{ $errors }}<br/>
            @endforeach
        @endcomponent
    @endif

    <a href="{{ route('tarefas.add')}}">Adicionar Novo Cliente</a>

    @if(count($list)>0)
        <ul>
        @foreach ($list as $item)
            <li>
                <a href="{{ route('tarefas.edit', ['id'=>$item->id]) }}">[ editar ]</a>
                <a href="{{ route('tarefas.del', ['id'=>$item->id]) }}" onclick=" return confirm('Tem Certeza que deseja Excluir?')">[ Excluir ]</a>
                {{ "Nome: " . $item->nome . " -  Email: " . $item->email }}
            </li>   
        @endforeach
        </ul>
    @else
        <ul>
        SEM ITENS NA LISTAGEM
        </ul>
    @endif

@endsection