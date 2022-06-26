@extends('layouts.main') <!--Linkankdo arquivos da pasta layouts, arquivo main-->


@section('title' , 'produtos')
@section('content')
{{--
    <table>
    @foreach($produtos as $produto) 
    <tr>
        <td>
        Nome: {{$produto -> nome}}
        </td>
        <td>
        Valor: {{$produto -> valor}}
        </td>
        <td>
        Quantidade em estoque: {{$produto -> estoque}}
        </td>
        <td>
        <form action="/editar-produto/{{$produto -> id}}" method="GET">
            <button type="submit">Editar</button>
         </form>
        </td>
        <td>
        <form action="/excluir-produto/{{$produto -> id}}" method="GET">
        <button type="submit">Deletar</button> </form>
        </td>
    </tr>
    @endforeach
</table>
--}}


<div class="container">
    <h1 class="">Tabela de produtos</h1>
    <a  href="{{route('criar.produto')}}" class="text-decoration-none text-white"><button type="button" class="btn btn-primary"><b> + Novo produto</b></button></a>
<i class="bi-alarm"></i>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



  <form action="{{route('produto.import')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" class="form-control">
    <button class="btn btn-info" class="form-control">Upload</button>
  </form>

  <a href="{{route('produto.export.table')}}">
    <button class="btn btn-success">Excel</button>
  </a>

<table class="table  table-bordered ">
  <thead >
    <tr> 
      <th scope="col">Produto</th>
      <th scope="col">Valor</th>
      <th scope="col">Quantidade em estoque</th>
      <th scope="col">Categoria</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $produto)
    <tr>      
      <td>{{$produto -> nome}}</td>
      <td>{{$produto -> valor}}</td>
      <td>{{$produto -> estoque}}</td>
      <td>{{$produto->categoria->categoria}}</td>
      <td>
        <form action="/editar-produto/{{$produto -> id}}" method="GET">
            <button type="submit" class="btn btn-outline-success">Editar</button>
         </form>
        </td>
        <td>
        <form action="/excluir-produto/{{$produto -> id}}" method="GET">
        <button type="submit" class="btn btn-outline-danger">Deletar</button> </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>


   
@endsection
