<?php
if(isset($_POST['submit'])) {
    include_once('config.php');

    $cpf = $_POST['cpf'];
    $pnome = $_POST['primeironome'];
    $snome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['password'];

    // Verifica se um arquivo de imagem foi enviado
    if(isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
        // Código para mover a imagem para o diretório de destino

        // Caminho da imagem para ser armazenado no banco de dados
        $caminho_imagem = $foto_destino;

        // Atualiza os dados do perfil no banco de dados, incluindo o caminho da imagem
        $query = "UPDATE usuario SET primeiro_nome = '$pnome', ultimo_nome = '$snome', email = '$email', senha = '$senha', caminho_imagem = '$caminho_imagem' WHERE cpf = '$cpf'";
    } else {
        // Atualiza os dados do perfil no banco de dados sem o caminho da imagem
        $query = "UPDATE usuario SET primeiro_nome = '$pnome', ultimo_nome = '$snome', email = '$email', senha = '$senha' WHERE cpf = '$cpf'";
    }

    $result = mysqli_query($conexao, $query);

    if ($result) {
        // Atualização bem-sucedida, redirecionar para uma página de confirmação
        header('Location: perfil_atualizado.php');
        exit;
    } else {
        // Ocorreu um erro durante a atualização
        echo "Ocorreu um erro ao atualizar o perfil.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SilaSmart - Editar Perfil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>SilaSmart - Editar Perfil</h1>
    
    <!-- Formulário de Perfil -->
    <form method="POST" enctype="multipart/form-data" action="silo.php">
      <div class="mb-3">
        <label for="inputNome" class="form-label">Editar Nome:</label>
        <input type="text" class="form-control" name="primeironome" placeholder="Digite seu primeiro nome">
        <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu último nome">
      </div>
      <div class="mb-3">
        <label for="inputEndereco" class="form-label">Editar Endereço:</label>
        <input type="text" class="form-control" id="endereco" placeholder="Digite seu endereço">
      </div>
      <div class="mb-3">
        <label for="inputFoto" class="form-label">Trocar Foto de Perfil:</label>
        <input type="file" class="form-control" name="foto" id="inputFoto">
      </div>

      <div class="mb-3">
        <label for="inputCPF" class="form-label">CPF:</label>
        <input type="text" class="form-control" name="cpf" placeholder="Digite o CPF">
      </div>
      
      <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
    </form>
    
    <!-- Formulário de Cadastro do Silo -->
    <h2>Cadastrar Silo/Produto</h2>
    <form>
      <div class="mb-3">
        <label for="inputCodigo" class="form-label">Código:</label>
        <input type="text" class="form-control" id="inputCodigo" placeholder="Digite o código do silo/produto">
      </div>
      
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
</body>
</html>
