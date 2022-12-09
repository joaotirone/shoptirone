@extends('layouts.app')

@section('content')

<form action="{{ URL('/product/update/'.$produtos->id) }}" method="post">
            @csrf
            @method('PUT')
        <div id="login">
        <h3 class="text-center text-dark pt-5">ShopTirone - Produtos</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ route('login') }}" method="post">
                          @csrf
                            <h3 class="text-center text-dark"></h3>
                            <div class="form-group">
                                <label for="username" class="text-dark">Nome:</label><br>
                                <input type="text" name="name" value="{{$produtos->name}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">Slug:</label><br>
                                <input type="text" name="slug"  value="{{$produtos->slug}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">Detalhes:</label><br>
                                <input type="text" name="details" value="{{$produtos->details}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">Descrição:</label><br>
                                <input type="text" name="description"  value="{{$produtos->description}}" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="text" class="text-dark">Valor:</label><br>
                                <input type="text" name="price" id="price" value="{{$produtos->price}}" class="form-control">
                            </div>
                            <div class="col-12">
                            <a href="{{ URL('/product/destroy/'.$produtos->id) }}">
                                <button class="btn btn-danger btn-sm"><i class="fa fa-eye"></i>
                                    deletar
                                </button>
                            </a>
                            </div>
                            <br>
                            <br>
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

