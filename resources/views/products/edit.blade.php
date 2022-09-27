@extends('layouts.navbar')

@section('content')
<h1 class="text-secondary">Edição de Produtos</h1>
  <form action="{{route('product.update', $product->id)}}" method="POST">
  @csrf
  @method('PUT')
          <div class="d-flex flex-column">

  <div class="col-sm-2">
  <label for="staticEmail" class="col-sm-2 col-form-label">Nome:</label>
  <input type="text" class="form-control" name="name" value="{{$product->name}}">
</div>

  <div class="col-sm-2">
  <label for="staticEmail" class="col-sm-2 col-form-label">description</label>
  <input type="text" class="form-control" name="description" value="{{$product->description}}">
</div>

  <div class="col-sm-2">
  <label for="staticEmail" class="col-sm-2 col-form-label">price_cents</label>
  <input type="number" class="form-control" name="price" value="">
</div>

<select class="" name="">
  <option value="1" @if ($product->is_avaiable) selected @endif>Disponível</option>
    <option value="0" @if (!$product->is_avaiable) selected @endif>Indisponível</option>
</select>

<button type="submit">Enviar</button>
</div>
</form>

@endsection
