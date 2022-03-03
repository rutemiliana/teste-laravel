<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>



    @foreach($produtos as $produto) 
        <form action="/editar-produto/{{$produto -> id}}" method="GET">
            <p>Nome: {{$produto -> nome}} -- Valor: {{$produto -> valor}}
            <button type="submit">Editar</button> </form>
        <form action="/excluir-produto/{{$produto -> id}}" method="GET">
        <button type="submit">Deletar</button> </form></p>
    @endforeach
    
    <a href="/">Cadastrar novo produto</a>
</body>
</html>