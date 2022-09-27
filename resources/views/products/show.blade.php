@extends('layouts.navbar')

@section('content')
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action">:nome:{{$product->name}}</a>

  <a href="#" class="list-group-item list-group-item-action list-group-item-primary">:descrição:{{$product->description}}</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">:preço:{{$product->price_cents}}</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-dark">:disponibilidade:{{$product->is_avaiable}}</a>

</div>

<ul class="list-group">
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
    <label class="form-check-label" for="firstCheckbox">Molho Extra</label>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
    <label class="form-check-label" for="secondCheckbox">Batata Frita Extra</label>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
    <label class="form-check-label" for="thirdCheckbox">Copos com canudos</label>
  </li>
</ul>



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
