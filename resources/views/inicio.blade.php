<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>

    <div id="search-container" class="col-md-12">
        <h1>Busque uma categoria</h1>
        <form action="/criar-produto" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>

     {{--se tiver algo na busca--}}
    @if($search)
    <h2>Bruscando por:  {{$search}}</h2>
        @else
            <h2>Próximos eventos<h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif

        @if(count($categorias) == 0 && $search)
        <p>Não foi possível encontrar nenhuma categoria com {{ $search }} ! <a href="/ver-categorias"> Ver todas as categorias</a> </p>
    @elseif(count($categorias) == 0)
        <p>Categoria não encontrada</p>
    @endif

    
    
    <form action="/criar-produto" method= 'POST'>
        @csrf {{-- gera token de segurnaça a cada envio--}}
        <label>Nome do produto:</label>
        <input type="text" name="nome" value="{{old('nome')}}"> 
        <br><br>
        <label>Valor do produto:</label>
        <input type="text"  name="valor" value="{{old('valor')}}"> 
        <br><br>
        <label>Quantidade em estoque:</label>
        <input type="text"  name="estoque" value="{{old('estoque')}}">
        <label>Categoria:</label>
        @if(count($categorias) == 1 && $search)
        <input name="categoria" type="text" value="{{$categorias[0]->categoria}}" Readonly>
    @else
    <input name="categoria" type="text" value="" Readonly>
    @endif
        
        

        {{--<label>Categoria:</label>
       <select id="id_categorias" name="categoria_id">
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id ,old('categoria_id')}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>--}}


       
        
        <br><br> 
        <button type="submit">Salvar Produto</button>
    </form>
    <br>

    <a href="{{route ('ver.produtos')}}"><button>Ver produtos</button></a>
    
</body>
</html>