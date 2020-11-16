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
        <input type="text" name = "name" value = "{{ $data->name }}" /><br/>

        Email: <br/>
        <input type="text" name = "email" value = "{{ $data->email }}"/><br/>

        CPF/CNPJ: <br/>
        <input type="text" name = "cliCGC" value = "{{ $data->cliCGC }}"/><br/>

        Endereço: <br/>
        <input type="text" name = "address" value = "{{ $data->address }}"/><br/>

        Cidade: <br/>
        <input type="text" name = "city" value = "{{ $data->city }}"/><br/>

        <input type="submit" value= "Salvar" />

    </form>
@endsection