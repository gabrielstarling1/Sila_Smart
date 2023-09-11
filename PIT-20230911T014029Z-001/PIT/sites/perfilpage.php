<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SilaSmart - Perfil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>SilaSmart - Perfil</h1>

    <?php
    // Conexão com o banco de dados
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword='';
    $dbName= 'pit';
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    // Verifica se a conexão deu certo
    if (mysqli_connect_errno()) {
      echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
    }

    // Consulta para os dados do perfil do usuário
    $consulta = "SELECT primeiro_nome, ultimo_nome, email, cpf FROM usuario WHERE codigo_usuario = 1"; // Substitua o id pelo valor adequado

    // Executa a consulta
    $resultado = mysqli_query($conexao, $consulta);

    // Verifica se a consulta retornou resultados
    if ($resultado) {
      // Obtém os dados do perfil
      $perfil = mysqli_fetch_assoc($resultado);
      $p_nome = $perfil['primeiro_nome'];
      $u_nome = $perfil['ultimo_nome'];
      $email = $perfil['email'];
      $cpf = $perfil['cpf'];
   

      // Exibe os dados do perfil
      echo "<h2>Dados Pessoais</h2>";
      echo "<p><strong>Nome:</strong> " . $p_nome . "</p>";
      echo "<p><strong>CPF:</strong> " . $cpf . "</p>";
      echo "<p><strong>Endereço de Email:</strong> " . $email . "</p>";
   
    } else {
      echo "Erro ao executar a consulta: " . mysqli_error($conexao);
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
    ?>
  </div>
</body>
</html>
