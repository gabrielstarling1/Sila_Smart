<?php

  if(isset($_POST['submit']))
  {

    include_once('config.php');

    $pnome = $_POST['primeironome'];
    $snome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha= $_POST['password'];
    $tpuser= $_POST['tpuser'];

    $result = mysqli_query($conexao, "INSERT INTO usuario(primeiro_nome,ultimo_nome,email,cpf,senha,tipo_usuario) VALUES ('$pnome','$snome','$email','$cpf','$senha','$tpuser')");
    header('location: login.php');
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
          <h1>Cadastro de Usuários e Funcionários</h1>
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

  <div class="container mt-5">

    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2>Cadastro</h2>
        <form action="cadastro.php" method="POST"> 
          <div class="mb-3">
            <label for="primeironome" class="form-label">Primeiro Nome </label>
            <input type="text" name="primeironome" class="form-control" id="primeironome" placeholder="Digite o primeiro nome">
          </div>
          <div class="mb-3">
            <label for="sobrenome" class="form-label">Sobrenome </label>
            <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="Digite o sobrenome">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Endereço de email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="exemplo@exemplo.com">
          </div>
          <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="cpf" name="cpf" class="form-control" id="cpf" placeholder="XXX.XXX.XXX-XX" oninput=mascara_cpf() maxlength="14">
          <script>
            function mascara_cpf()
              {   
                  
                  var cpf_formatado = document.getElementById("cpf").value
                  if (cpf_formatado[3]!=".")
                  {
                      if (cpf_formatado[3]!=undefined)
                      {
                          document.getElementById("cpf").value=cpf_formatado.slice(0,3)+"."+cpf_formatado[3];
                      }
                  }
              
                  if (cpf_formatado[7]!=".")
                  {
                      if(cpf_formatado[7]!=undefined)
                      {
                          document.getElementById("cpf").value=cpf_formatado.slice(0,7)+"."+cpf_formatado[7]
                      }
                  }

                  if (cpf_formatado[11]!="-")
                  {
                      if(cpf_formatado[11]!=undefined)
                      {
                          document.getElementById("cpf").value=cpf_formatado.slice(0,11)+"-"+cpf_formatado[11]
                      }
                  }

              }       
          </script>
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="senha" placeholder="Digite a senha">
          </div>

    <!-- <div class="mb-3">
            <label for="confirmarSenha" class="form-label">Confirmar senha</label>
            <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirme a senha">
          </div>  
          <div class="mb-3">
    -->
    
            <label for="tipoUsuario" class="form-label">Tipo de usuário</label>
            <select class="form-select" type="tpuser" name="tpuser" id="tipoUsuario">
              <option value=1>Funcionário</option>
              <option value=0>Usuário</option>
            </select>
    
          </div>
          <div class="mb-3">
            <label for="fotoPerfil" class="form-label">Foto de perfil</label>
            <input class="form-control" type="file" id="fotoPerfil">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>

  <footer class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Página inicial: <a href="#">Home</a></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Empresas parceiras: <a href="#">Empresa A</a>, <a href="#">Empresa B</a>, <a href="#">Empresa C</a></p>
        </div>
      </div>
    </div>
  </footer>      
</body>
</html>