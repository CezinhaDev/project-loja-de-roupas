<?php
    if(isset($_POST['cadastrar'])){
        $nome = $_POST["Nome"];
        $email = $_POST["Email"];
        $senha = $_POST["Senha"];   
        }


        $host = "localhost";
        $banco = "formulario";
        $user = "root";
        $senha_user = "";

        $con = mysqli_connect($host, $user, $senha_user, $banco);

        if(!$con){
            die("conexão falhou. " . mysqli_connect_error());
        }

        $sql = "INSERT INTO clientes(Nome, Email, Senha) VALUES('$nome', '$email','$senha')";

        $rs = mysqli_query($con, $sql);

        if($rs){
            echo "Cadastro concluído";
        }
?>