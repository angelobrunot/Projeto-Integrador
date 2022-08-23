@extends('layouts.app')

@section('content')
<h1>Documentação de Cadastro de Usuários</h1>
  <form method="POST" action="{{route('user.store')}}">
  @csrf
  <input type="text" name="name" value="">
  <input type="text" name="email" value="">
  <input type="password" name="password" value="">

<button type="submit">Enviar</button>
</form>

@endsection
