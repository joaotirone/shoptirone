@extends('layouts.app')

@section('content')

<form action="{{ route('product.store') }}" method="post">
            @csrf
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
                                <input type="text" name="name"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">Slug:</label><br>
                                <input type="text" name="slug"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">Detalhes:</label><br>
                                <input type="text" name="details" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-dark">Descrição:</label><br>
                                <input type="text" name="description" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="text" class="text-dark">Valor:</label><br>
                                <input type="text" name="price" id="price" class="form-control">
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" name="submit" class="btn btn-dark btn-md" value="Criar Produto">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

@endsection

