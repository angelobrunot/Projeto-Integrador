@extends('layouts.navbar')

@section('content')
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">nome:{{$product->name}}</a>

  <a href="#" class="list-group-item list-group-item-action list-group-item-primary">descrição:{{$product->description}}</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">preço:{{$product->price_cents}}</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">disponibilidade:{{$product->is_avaiable}}</a>

</div>

@endsection
