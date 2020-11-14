@extends('layouts.admin')

@section('title', 'Edição de Clientes')

@section('content')
    <h1>Edição</h1>

    @if($errors->any())
        @component('components.alert')
            @foreach($errors->all() as $error)
                {{ $errors }}<br/>
            @endforeach
        @endcomponent
    @endif

    <form method="POST">
        @csrf

        Nome: <br/>
        <input type="text" name = "nome" value = "{{ $data->nome }}" /><br/>

        Email: <br/>
        <input type="text" name = "email" value = "{{ $data->email }}"/><br/>


        <input type="submit" value= "Salvar" />

    </form>
@endsection