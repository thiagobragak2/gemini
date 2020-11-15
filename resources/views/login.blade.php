@extends('layouts.admin')

@section('title', 'Login')

@section('content')

    @if($errors->any())
    @component('components.alert')
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $errors }}</li>
        @endforeach
        </ul>
    @endcomponent
    @endif

    <form method="POST">
        @csrf
        <input type="email" name="email" placeholder="Digite um e-Mail" /><br/>
        <input type="password" name="password" placeholder="Digite sua Senha" /><br/>

        <input type="submit" value="Entrar"/> - <a href="/register">Cadastrar-se</a>
    </form>


@endsection