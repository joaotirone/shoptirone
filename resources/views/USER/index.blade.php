@extends('layouts.app')

@section('content')


<br>
<br>
<br>
<br>

<section>
        <div  class="input- mb-2">
            <div class="input-group">
            <form action="{{ route('user.search') }}" method="post" >
        @csrf   
        <!-- Form_Search_Filter -->
        <div class="row vaing-wrapper">
          <div class="input-field col s2">
        <input type="text" name="user_name"  class="form-control" placeholder="USER NAME" value="{{$user_name}}">
        </div>
        <br>
        <br>
        <br>
        <div class="input-field col s2">
        <input type="text" name="cpf"  class="form-control" placeholder="CPF:" value="{{$cpf}}">
        </div>
        </div>
        <br>
        <br>
        </div> 
          <br>
          <br>
                                         <!-- Botões -->
        <button type="submit" class="btn btn-primary">Filtrar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
                <a href="{{route('user.index')}}" class="btn btn-danger">Limpar Filtro <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
        </svg></a>
       
       
    </form>
          
</section>
<a href="{{route('user')}}">novo user</a>
<form class="row g-3 margin-top-15">
    <h3 class="btn btn-dark" >VENDAS</h3>
</form>
<section>
<div class="card">
    <div class="card-body">
    <table id="tbl1"  class="table table-success table-hover"> 
        <thead>
        <tr class="table-success">
            <th>NOME</th>
            <th>CPF</th>
            <th>DATA DE NASCIMENTO</th>
            <th>OPÇÕES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fun as $f)
        <tr>
            <td> {{$f->name}}  </td>
            <td> {{$f->cpf}}</td>
            <td> {{$f->birthday}}</td>
            
            <td>
                <a href="{{ URL('/user/edit/'.$f->id) }}">
                    <button class="btn btn-dark btn-sm"><i class="fa fa-eye"></i>
                     Ver Detalhes
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</section>
@endsection