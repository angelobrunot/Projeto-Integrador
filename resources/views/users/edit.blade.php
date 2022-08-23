@extends('layouts.app')

@section('content')
<h1>Formulário de Cadastro de Usuários</h1>
  <form action="{{route('user.update', $user->id)}}" method="POST">
  @csrf
  @method('PUT')
  <input type="text" name="name" value="{{$user->name}}">
  <input type="text" name="email" value="{{$user->email}}">
  <input type="password" name="password" value="">

<button type="submit">Enviar</button>
</form>

@endsection
