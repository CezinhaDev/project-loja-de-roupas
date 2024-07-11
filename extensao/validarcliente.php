<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
</head>
<body>

<?php
session_start();

$server = "localhost";
$user = "root";
$senha = "";
$bdbanco = "formulario";

$conn = new mysqli($server, $user, $senha, $bdbanco);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$email = $conn->real_escape_string($email);

$sql = "SELECT * FROM clientes WHERE Email = '$email' AND Senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['usuario'] = $row['Nome'];
    echo "<script>alert('Seja bem vindo!'); window.location.href='catalogo.php';</script>";
    exit();
} else {
    echo "<script>alert('Email ou senha incorretos!'); window.location.href='cadastro.php';</script>";
}

$conn->close();
?>
    
</body>
</html>