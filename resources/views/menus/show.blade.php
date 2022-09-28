@extends('layouts.navbar')

@section('content')

<form action="{{route('menu.product.store', $menu->id)}}" method="post">
  @csrf
  <div class="mb-3 d-flex flex-row gap-3">
    <div>
      <label for="selectproducts">Adicionar produto:</label>
      <select id="selectproducts" class="form-select" name="product_id">
        @foreach($addableProducts as $product)
        <option value="{{$product->id}}">{{$product->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="d-flex align-items-end">
      <button type="submit" class="btn-success rounded" title="Adicionar novo prato">
        <i class="bi bi-clipboard-plus"></i>
      </button>
    </div>
  </div>
</form>

@endsection
