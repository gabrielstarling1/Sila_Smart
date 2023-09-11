<?php
session_start();
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);

    if (mysqli_num_rows($result) < 1) {
        header('Location: login.php');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        // Consulta SQL para obter o nome do usuário com base no ID
        $sql = "SELECT nome FROM usuarios WHERE id = 1";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $nome = $row['nome'];
        } else {
            echo "Erro na consulta: " . mysqli_error($conn);
        }

        header('Location: silo.php');
    }
} else {
    header('Location: login.php');
}
?>