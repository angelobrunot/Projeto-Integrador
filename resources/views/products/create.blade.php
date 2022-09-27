@extends('layouts.navbar')

@section('content')
<h1> <div class="p-3 mb-2 bg-secondary text-white">Cadastro de Produtos</div>
 </h1>
  <form class="row g-3" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
  @csrf

  <fieldset>

<div class="col-6">
    <label for="email">Nome</label>
    <input class="form-control" type="text" name="name" placeholder="">
</div>

  <div class="col-md-6">
    <label for="password">Preço</label>
    <input class="form-control"type="number" name="price">
</div>

  <div  class="col-md-6">
    <label  for="inputEmail4" class="form-label">Descrição</label>
    <input type="text" class="form-control" name="descripiton">
  </div>

<div class="col-md-6">
      <label for="tel">Disponibilidade</label>
  <select name="is_avaliable" class="form-select" aria-label="Default select example">
    <option value="1">Disponivel</option>
    <option value="2">Indisponivel</option>
  </select>
</div>

 <div class="col-md-6">

   <label for="number">Imagem</label>
   <input name="image" type="file" class="form-control" aria-label="file example" required>
 </div>

 <div class="mb-3">

   <div class="invalid-feedback">Example invalid form file feedback</div>
 </div>


    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Confirmar Cadastro</button>
    </div>
  </div>
  </form>

</form>

@endsection
