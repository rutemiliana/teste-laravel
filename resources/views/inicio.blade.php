<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    <form action="{{route('criar.produto')}}" method= 'POST'>
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
        <select id="id_categorias" name="categoria_id">
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id ,old('categoria_id')}}">{{$categoria->categoria}}</option>
            @endforeach
        </select>
        
        <br><br> 
        <button type="submit">Salvar Produto</button>
    </form>
    <br>

    <a href="{{route ('ver.produtos')}}"><button>Ver produtos</button></a>
    
</body>
</html>