
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Link para o arquivo CSS do Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>
  <header class="py-3 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Login</h1>
        </div>
        <div class="col-md-6">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cadastro.php">Cadastro</a>
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
        <h2>login</h2>
        <form action="postlogin.php" method="POST"> 
          <div class="mb-3">
            <label for="email" class="form-label">Email </label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Digite o seu Email">
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite a sua senha">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">login</button>
        </form>
      </div>
    </div>
  </div>

  <footer class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Páginas <a href="#">Home</a>, <a href="cadastro.php">Cadastro</a></p>
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