<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Cliente</title>
</head>
<body>
    <?php
    
    if($_POST["nome"] != ""){

        include_once "factory/conexao.php";
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $sql = "insert into clientes(nome,email,senha)values('$nome','$email','$senha')";
        $result = mysqli_query($conn,$sql);

        echo "<script>alert('Você foi cadastrado!'); window.location.href='catalogo.php';</script>";
    }

    else{
        echo "Erro ao gravar dados";
    }
    
    ?>
    
</body>
</html>