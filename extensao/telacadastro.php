<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="telacadastro.css">
</head>
<body>
    <header class="cabeçalho">
        <nav class="menu-nav">
            <a href="index.php"><img src="https://i.imgur.com/OwJQA9y.png"></a>
            <div class="nav-menu">
                <img src="https://i.imgur.com/yu9Jpxk.png"><a href="https://web.whatsapp.com/" target="_blank">(11) 96603-3587</a>
                <img src="https://i.imgur.com/rI1kV5z.png"><a href="https://www.instagram.com/sahfitmoda/" target="_blank">Instagram</a>
                <img src="https://i.imgur.com/YAoxQ7a.png"><a href="catalogo.php" target="_blank">Catálogo</a>
                <img src="https://i.imgur.com/0peU0tp.png"><a href="cadastro.php" target="_blank">Entrar ou Criar conta</a>
            </div>
        </nav>
    </header>

    <section class="cadastro" style="margin-left:600px;">
            <div style="color:#FFF;margin-bottom:40px;margin-top:250px;">
            
                <h1 style="border-bottom: solid 1px #FFF; width:230px;">Informações Pessoais:</h1>
            </div>


                <form action="inserircliente.php" method="POST">
                <p style="color:#FFF;font-size: 15px;"><b>Nome Completo:</b> </p>
                <input type="text" name="nome" placeholder="Digite o seu nome:" style="width:200px;" required ><br>

                <p style="color:#FFF;font-size: 15px;"><b>Email:</b> </p>
                <input type="text" name="email" placeholder="Digite o seu Email:" style="width:200px;"><br>

                <p style="color:#FFF;font-size: 15px;"><b>Senha:</b> </p>
                <input type="password" name="senha" placeholder="Digite a sua senha:" style="width:200px;"><br>
            
                <input type="submit" value="Cadastrar" style="background-color: #81B73A; padding:10px; margin-top: 20px;">
                </form>
    </section>
    
    <footer class="rodape" style="display:flex;align-items:center;justify-content:center;margin-top:233px;">
        <section class="conteudo-rodape" style="display:flex;flex-direction:row;align-items:center;">
            <p class="titulo-rodape" style="margin-bottom:10px;font-family: 'Roboto', sans-serif;">RECEBA NOSSAS NOVIDADES EM PRIMEIRA MÃO</p>
            <div class="form-rodape">
                <a href="telacadastro.php" style="background-color: #81B73A; padding:10%; width:120px;border-radius:20px;text-decoration:none;Color:#000;padding-left:33px; "><b>Cadastre-se</b></a>
            </div>
            
        </section>
    </footer>
    
</body>
</html>