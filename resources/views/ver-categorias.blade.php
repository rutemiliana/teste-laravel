<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Categorias</h1>
    @foreach ($categorias as $categoria)
        <p>Categoria: {{$categoria -> categoria}} {{$categoria -> id}}</p>

        <form action="/editar-categoria/{{$categoria -> id}}" method="GET">
            <button type="submit"> Editar</button>
        </form>
        
        <form action="/excluir-categoria/{{$categoria -> id}}" methot="GET">
            <button type="deletar"> Deletar </button>
        </form>
    @endforeach
</body>
</html>
