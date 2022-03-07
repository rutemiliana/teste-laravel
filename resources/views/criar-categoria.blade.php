@extends('layouts.main') <!--Linkankdo arquivos da pasta layouts, arquivo main-->

@section('title', 'Criar categoria') 

@section('content')
  <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie uma categoria</h1>

    <form action="/criar-categoria" method="POST" >
        @csrf
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control"  name="categoria" placeholder="Nome da categoria">
        </div>
        <button type="submit" class="btn btn-info">Criar</button>
    </div>
    </form>


@endsection
