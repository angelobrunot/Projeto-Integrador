<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Cadastro de Funcionário</title>
  </head>
  <body class="bg-dark">
    <div class="d-flex h-100 m-4 position-absolute justify-content-center align-items-center">
      <div class="p-4 w-75 bg-light">

        <form class="row g-3" action="{{route("user.store")}}"method="POST">
          @csrf
          <h1>Cadastro de Funcionarios </h1>
          <div class="col-6">
            <label for="inputNome" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="inputNome" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail">
          </div>
          <div class="col-6">
            <label for="inputSenha" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="inputSenha" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputEndereço" class="form-label">Endereço</label>
            <input type="text" name="address" class="form-control" id="inputEndereço">
          </div>
          <div class="col-12">
            <label for="inputTelefone" class="form-label">Telefone</label>
            <input type="text" name="phone" class="form-control" id="inputTelefone" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputTipoFuncionario" class="form-label">Tipo de Funcionário</label>
            <input type="text" name="type" class="form-control" id="inputTipoFuncionario">

          </div>

          <div class="col-md-6">

          </div>
          <div class="col-md-4">


          </div>
          <div class="col-md-2">


          </div>
          <div class="col-12">


          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
