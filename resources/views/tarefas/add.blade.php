@extends('layouts.admin')

@section('title', 'Inclusão de Clientes')

@section('content')
    <h1>Inclusão</h1>

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
        <input type="text" name = "nome" /><br/>

        Email: <br/>
        <input type="text" name = "email" /><br/>


        <input type="submit" value= "Cadastrar" />

    </form>

@endsection