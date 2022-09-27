<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Tela de Cadastro</title>
  </head>
  <body class="bg-dark">
    <div class="d-flex h-100 m-4 position-absolute justify-content-center align-items-center">
      <div class="p-4 w-75 bg-light">

        <form class="row g-3">
          <h1>Cadastro de Empresas e Gerentes </h1>
          <h2>Dados da Empresa</h2>
          <div class="col-6">
            <label for="inputAddress2" class="form-label">CNPJ</label>
            <input type="text" name="cnpj" class="form-control" id="inputAddress2" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Razão Social</label>
            <input type="text" name="trading_name" class="form-control" id="inputCity">
          </div>
          <div class="col-6">
            <label for="inputAddress2" class="form-label">Nome Fantasia</label>
            <input type="text" name="trading_name" class="form-control" id="inputAddress2" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Telefone</label>
            <input type="text" name="phone" class="form-control" id="inputCity">

          </div>
          <h2>Dados do Gerente</h2>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Gerente responsável</label>
            <input type="text" name="responsible manager" class="form-control" id="inputAddress2" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Endereço</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="">
          </div>

          <div class="col-md-6">


          </div>
          <div class="col-md-4">


          </div>
          <div class="col-md-2">


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
