@extends('layouts.app')

@section('content')

        <form action="{{ URL('/user/update/'.$fun->id) }}"  method="post">
        @csrf
        @method('PUT')
        <div id="login">
        <h3 class="text-center text-dark pt-5">ShopTirone - Login</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="post">
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
                                <input type="number" name="cpf" value="{{$fun->cpf}}"  class="form-control">
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
                                
                                <input type="submit" name="submit" class="btn btn-dark btn-md" value="Salvar Cadastro">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection