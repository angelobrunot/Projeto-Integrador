@extends('layouts.navbar')

@section('content')

<div class="container mt-4">
  <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Produtos</th>
      <th scope="col">Descrição</th>
      <th scope="col">Disponível</th>
      <th scope="col">Vizualizar</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>
  <tbody>
    @foreach($menus as $menu)
    <tr>
      <th scope="row"></th>
      <td>Produtos</td>
      <td>Descrição</td>
      <td>Disponível</td>
        <td>Vizualizar</td>
          <td>Editar</td>
            <td>Remover</td>
    </tr>
@endforeach
  </tbody>
</table>

</div>
@endsection
