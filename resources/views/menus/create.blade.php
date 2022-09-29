@extends('layouts.navbar')

@section('content')

<div class="container mt-4">
  <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Produtos2</th>
      <th scope="col">Descrição4</th>
      <th scope="col">Disponível3</th>
      <th scope="col">Vizualizar1</th>
      <th scope="col">Editar5</th>
      <th scope="col">Remover6</th>
    </tr>
  </thead>
  <tbody>
    @foreach($menus as $menu)
    <tr>
      <th scope="row"></th>
      <td>Produtos7</td>
      <td>Descrição8</td>
      <td>Disponível9</td>
        <td>Vizualizar0</td>
          <td>Editar1</td>
            <td>Remover2</td>
    </tr>
@endforeach
  </tbody>
</table>

</div>
@endsection
