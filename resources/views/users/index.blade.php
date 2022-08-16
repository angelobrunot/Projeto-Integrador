@extends('layouts.app')

@section('content')
<h1>listagem de usuarios</h1>
<div class="container mt-4">
  <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">email</th>
      <th scope="col">cpf</th>
      <th scope="col">telefone</th>
      <th scope="col">tipo</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->name}}</th>
      <td>{{$user->email}}</td>
      <td>{{$user->cpf}}</td>
      <td>{{$user->phone}}</td>
        <td>{{$user->type}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
