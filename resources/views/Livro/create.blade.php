@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Livro</h1>
@stop
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        <h4>
            <i class="icon fas fa-ban"></i>ocorreu o seguinte error_clear_last 
            @foreach($errors->all() as $erro)
            <li>
                <h5>
                    {{$erro}}
                </h5>
            </li>
            @endforeach

        </h4>
    </ul>
</div>
@endif
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Cadastro de Livro </h3>
</div>


<form method="POST" action="{{route('salvar')}}">
@csrf
<div class="card-body">
    <div class="form-group">
        <label for="exampleInputEmail1">Categoria Livro</label>
       <select name="categoria_livro_cd_categ">
            <option value=""></option>
       </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Numero Reserva</label>
        <select name="reserva_num_reserva">
            <option value=""></option>
       </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Emprestimo</label>
        <select name="emprestimo_num_emprestimo">
            <option value=""></option>
       </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Editora</label>
        <select name="editora_cod_editora">
            <option value=""></option>
       </select>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Título</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entre com o título do livro Ex: Harry Potter" name="titulo_livro">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Situação</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="
         Ex:romance, suspense, ficção..." name="situacao_livro">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Quantidade</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Quantidade de livros a ser emprestado ex:1,2,3" name="qtde_livro">
    </div>
   



<div class="card-footer">
<button type="submit" class="btn btn-success">Cadastrar</button>
<button type="reset" class="btn btn-danger">Cancelar</button>
</div>
</form>
</div>

@endsection

@section('css')
@endsection

@section('js')
@endsection