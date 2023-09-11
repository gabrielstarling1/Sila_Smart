<?php

  if(isset($_POST['submit']))
  {

    include_once('config.php');

    $nome = $_POST['nome'];
    $capacidade = $_POST['capacidade'];
    $end = $_POST['endereco'];
    $cod_usu = $_POST['fk_codigo_usuario'];


    $result = mysqli_query($conexao, "INSERT INTO silo(nome, capacidade, endereco, fk_codigo_usuario) VALUES ('$nome','$capacidade','$end', '$cod_usu')");
  }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuários e Funcionários</title>
  <!-- Link para o arquivo CSS do Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>

<header class="py-3 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Cadastro do Silo</h1>
        </div>
        <div class="col-md-6">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2>Cadastro</h2>
        <form action="silo.php" method="POST"> 
          <div class="mb-3">
            <label for="primeironome" class="form-label">Nome do Silo</label>
            <input type="text" name="nome" class="form-control" id="ronome" placeholder="Digite o nome do silo a ser analisado">
          </div>
          <div class="mb-3">
            <label for="primeironome" class="form-label">Capacidade</label>
            <input type="text" name="capacidade" class="form-control" id="capacidade" placeholder="Digite a capacidade do silo em KG">
          </div>
          <div class="mb-3">
            <label for="primeironome" class="form-label">Município</label>
            <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Digite o município em que sua fazenda pertence ">
          </div>
          <div class="mb-3">
            <label for="primeironome" class="form-label">Código de usuário</label>
            <input type="text" name="fk_codigo_usuario" class="form-control" id="fk_codigo_usuario" placeholder="Digite o seu código de usuário ">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>

</body>
</html>