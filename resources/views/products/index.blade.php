@extends('layouts.app')

@section('content')
<h1>Agrupamento de Usuarios</h1>
<div class="container mt-4">
  <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">email</th>
      <th scope="col">cpf</th>
      <th scope="col">telefone</th>
      <th scope="col">tipo</th>
      <th scope="col">cidade</th>
      <th scope="col">rua</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">1</th>
      <td>{{$user->email}}</td>
      <td>{{$user->cpf}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->type =='manager'?'Gerente':'Funcionário'}}</td>

      <td> <a href="{{route('user.edit', $user->id)}}">Editar</a></td>
    </tr>

    @endforeach
  </tbody>
</table>
</div>
@endsection
