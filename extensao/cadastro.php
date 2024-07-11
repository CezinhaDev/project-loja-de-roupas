<?php session_start()?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro-style.css">
    <title>Cadastro</title>
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

    <main class="conteudo">


        <div class="separar-section">
            <section class="conteudo-principal">
                <p class="titulo-login">Login do Cliente</p>
                <p class="subtitulo-login">Clientes registrados</p>

                
                <form action="validarcliente.php" method="POST">
                <div class="login-info">
                    
                    <input type="text" name = "email" placeholder="Email *">
                    <input type="password" name = "senha" placeholder="Senha *">
                </div>

                <div class="login-entrar">
                    <input type="submit" style="background-color:#81B73A; height:30px; width:100px" value="Entrar">
                    <a href="recuperar-senha.html">Esqueceu a senha?</a>
                </div>
                </form>




                <p style="color:red">*Campos obrigatórios</p>
            </section>

            <section class="conteudo-secundario">
                <div class="conteudo-cadastro">
                    <p class="titulo-cadastro">Novos clientes</p>
                    <p class="subtitulo-cadastro">Criar uma nova conta tem muitos benefícios:<br>fechar pedidos mais rapidamente, acompanhar pedidos e muito mais.</p>
                </div>
                <form  type="submit" action="telacadastro.php"> 
                    <input style="background-color: #81B73A; padding:2%" type="submit" value="Cadastre-se"/>
                </form>
                
            </section>
        </div>
    </main>

    <footer class="rodape" style="display:flex;align-items:center;justify-content:center;">
        <section class="conteudo-rodape" style="display:flex;flex-direction:row;align-items:center;">
            <p class="titulo-rodape" style="margin-bottom:10px;font-family: 'Roboto', sans-serif;">RECEBA NOSSAS NOVIDADES EM PRIMEIRA MÃO</p>
            <div class="form-rodape">
                <a href="telacadastro.php" style="background-color: #81B73A; padding:10%; width:120px;border-radius:20px;text-decoration:none;Color:#000;padding-left:33px; "><b>Cadastre-se</b></a>
            </div>
            
        </section>
    </footer>
    
</body>
</html>