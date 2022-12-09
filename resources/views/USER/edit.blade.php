@extends('layouts.app')

@section('content')

        <form action="{{ route('create') }}" method="post">
            @csrf
        <div id="login">
        <h3 class="text-center text-dark pt-5">ShopTirone - Login</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ route('login') }}" method="post">
                          @csrf
                            <h4 class="text-center text-dark">Seja Bem Vindo</h4>
                            <div class="form-group">
                                <label for="username" class="text-dark">Nome Completo:</label><br>
                                <input type="text" name="name" value="{{$fun->name}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">E-mail:</label><br>
                                <input type="mail" name="email" value="{{$fun->email}}"   class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">CPF:</label><br>
                                <input type="number" name="cpf" value="{{$fun->cpF}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">Data de Nascimento:</label><br>
                                <input type="text" name="birthday" value="{{$fun->birthday}}" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">Telefone:</label><br>
                                <input type="text" name="phone" value="{{$fun->phone}}" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">Telefone Secundario:</label><br>
                                <input type="text" name="phone2" value="{{$fun->phone2}}" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Senha:</label><br>
                                <input type="password" name="password"  id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" name="submit" class="btn btn-dark btn-md" value="Finalizar Cadastro">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection