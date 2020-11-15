@extends('layouts.admin')

@section('title', 'Cadastro')

@section('content')

    @if($errors->any())
    @component('components.alert')
        {{ $errors }}<br/>
    @endcomponent
    @endif

    <form method="POST">
        @csrf
        <input type="email" name="email" placeholder="Digite um e-Mail" value="{{old('email')}}" /><br/>
        <input type="name" name="name" placeholder="Digite Seu Nome" value="{{old('name')}}" /><br/>
        <input type="password" name="password" placeholder="Digite sua Senha" /><br/>
        <input type="password" name="password_confirmation" placeholder="Confirme sua Senha" /><br/>

        <input type="cliCGC" name="cliCGC" placeholder="Digite seu CPF/CNPJ" value="{{old('cliCGC')}}" /><br/>
        <input type="birthday" name="birthday" placeholder="Informe a Data deAniversario" value="{{old('birthday')}}" /><br/>
        <input type="gender" name="gender" placeholder="Gênero F/M" value="{{old('gender')}}" /><br/>
        <input type="cellphone" name="cellphone" placeholder="Digite Seu Número de Celular" value="{{old('cellphone')}}" /><br/>
        <input type="cep" name="cep" placeholder="Informe o CEP" value="{{old('cep')}}" /><br/>
        <input type="address" name="address" placeholder="Digite seu Endereço" value="{{old('address')}}" /><br/>
        <input type="numberAdress" name="numberAdress" placeholder="Digite o Número Casa" value="{{old('numberAdress')}}" /><br/>
        <input type="additionalinfo" name="additionalinfo" placeholder="Digite Informações Adicionais" value="{{old('additionalinfo')}}" /><br/>
        <input type="reference" name="reference" placeholder="Informe uma Referencia" value="{{old('reference')}}" /><br/>
        <input type="neiborhood" name="neiborhood" placeholder="Digite seu Bairro" value="{{old('neiborhood')}}" /><br/>
        <input type="city" name="city" placeholder="Digite sua Senha" value="{{old('city')}}" /><br/>
        <input type="state" name="state" placeholder="Informe Seu Estado" value="{{old('state')}}" /><br/>

        <input type="submit" value="Cadastrar"/>
    </form>


@endsection