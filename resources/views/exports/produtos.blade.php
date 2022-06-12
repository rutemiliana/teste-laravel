<table>
    <thead>
    <tr>
        <th>Produto</th>
        <th>Valor</th>
        <th>Quantidade</th>
        <th>Categoria</th>
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
        </tr>
    @endforeach
    </tbody>
</table>