<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexao</title>
</head>
<body>

    <?php
        $server = "localhost";
        $user = "root";
        $senha = "";
        $bdbanco = "formulario";
        $conn = mysqli_connect($server,$user,$senha,$bdbanco);


    ?>
    
</body>
</html>