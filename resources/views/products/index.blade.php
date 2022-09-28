@extends('layouts.navbar')

@section('content')
<h1> <div class="p-3 mb-2 bg-dark text-white">Formulário de Produtos</div>
</h1>
<a href="{{route('product.create')}}" type="button" class="btn btn-outline-secondary">Criar Novo</a>


<div class="container mt-4">

  <table class="table table ">
  <thead>
    <tr>
      <th scope="col" >name</th>
      <th scope="col">description</th>
      <th scope="col">price_cents</th>
      <th scope="col">is_available</th>
      <th scope="col">establishments</th>
    </tr>
  </thead>
  <tbody>

    @foreach($products as $product)

    <tr>
      <td> <div class="bg-success p-2 text-dark bg-opacity-50">{{$product->name}}</div>
 </td>
      <td> <div class="bg-success p-2 text-dark bg-opacity-50">{{$product->description}}</div></td>

      <td> <div class="bg-success p-2 text-dark bg-opacity-50">R${{($product->price_cents)/100}}</div> </td>

      <td> <div class="bg-success p-2 .bg-dark.bg-gradient "> @if($product->is_avaiable)</div></td>

      "Disponível"

      @else

      "Indisponível"

      @endif

     </td>
      <td> <div class="bg-success p-2 text-dark bg-opacity-50">{{$product->establishment_id}}</div></td>
      <td> <img src="{{asset('/storage/'.$product->image_path)}}" width="60" height="50"></td>


      <td colspan="2" class="d-flex flex-rou gap-1">
        <a href="{{route('product.edit', $product->id)}}" type="button" class="btn btn-outline-secondary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
</svg>
  </a>

  <i class="bi bi-trash3-fill"></i>
  <form method="POST" action="{{route('product.destroy', $product->id)}}">
    @csrf

    @method('delete')

    <i class="bi bi-trash3-fill"></i>
    <button type="submit" class="btn btn-outline-danger">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg>
      <i class="bi bi-trash3-fill"></i>
    </button>
  </form>

</td>
    </tr>

    @endforeach

  </tbody>
</table>
</div>

@endsection
