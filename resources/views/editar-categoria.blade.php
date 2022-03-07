<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar categoria</h1>
    <form action="/editar-categoria/{{$categoria -> id}}" method="POST"> 
        @csrf
        <label for="categoria">Digite o nome de uma categoria:</label>
        <input type="text" name="categoria" value="{{$categoria -> categoria}}">
        <button type="submit">Criar</button>   
    </form>
</body>
</html>