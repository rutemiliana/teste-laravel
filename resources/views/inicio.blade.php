<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <form action="/ver-produtos" method= 'POST'>
        @csrf {{-- gera token de segurnaça a cada envio--}}
        <label>Nome do produto:</label>
        <input type="text" name="nome" > 
        <br><br>
        <label>Valor do produto:</label>
        <input type="text"  name="valor"> 
        <br><br>
        <label>Quantidade em estoque:</label>
        <input type="text"  name="estoque" >
        <label>Categoria:</label>
        <select id="id_categorias" name="categoria_id">
            <option value="1">Carro</option>
            <option value="2">Moto</option>
        </select>
        
        <br><br> 
        <button type="submit">Salvar Produto</button>
    </form>
    <br>

    <a href="{{route ('ver.produtos')}}"><button>Ver produtos</button></a>
    
</body>
</html>