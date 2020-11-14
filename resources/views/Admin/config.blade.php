@extends('layouts.admin')

@section('title', 'Configurações')

@section('content')
    <h1>CONFIGURACOES</h1>

    @component('components.alert')
        Alguma Frase COMPONENTE
    @endcomponent

    <ul>
        @forelse($lista as $item)
            <li>{{$item['nome']}} - {{$item['qt']}}</li>
        @empty
            <li>Não Há Ingredientes</li>            
        @endforelse
    </ul>

    Meu Nome é {{$nome}}, eu tenho {{$idade}} anos.<br/>

    Versão: {{$versao}}

    <form method="POST">
        @csrf

        Nome: <br/>
        <input type="text" name = "nome" /><br/>

        Idade: <br/>
        <input type="text" name = "idade" /><br/>

        Cidade: <br/>
        <input type="text" name = "cidade" /><br/>

        <input type="submit" value= "Enviar" />

    </form>

    <a href="/config/info">Informações</a>
@endsection