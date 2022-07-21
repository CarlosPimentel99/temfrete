<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faça seu login para continuar no seu painel de controle!">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="img/icons/favicon.svg">
</head>
<body class="login-tela-fundo">
        <section class="login-conteudo">
            <h3 class="login-conteudo-titulo vermelho"><strong>Faça seu login para prosseguir!</strong></h3>
            <form class="login-formulario" action="valida_login.php" method="POST">

                <div class="login-formulario-barra">
                    <img class="icone" alt="email" src="img/icons/email.svg">
                    <input class="login-conteudo-input cinza" type="email" placeholder="E-mail" name="email" required>
                </div>
                
                <div class="login-formulario-barra">
                    <img class="icone" alt="senha" src="img/icons/senha.svg">
                    <input class="login-conteudo-input cinza" type="password" placeholder="Senha" name="senha" required>
                </div>

                <div class="login-formulario-barra">
                    <button class="login-formulario-botao branco" type="submit">
                        <img class="icone" alt="login" src="img/icons/login.svg">
                        LOGIN</button>
                </div>

                <?php 
                  if(isset($_GET['login']) && $_GET['login'] == 'erro') {
                ?>
                  <div class="vermelho centralizado">
                    Usuário ou senha inválido(s)
                  </div>
                 <?php } ?>
                 <?php 
                  if(isset($_GET['login']) && $_GET['login'] == 'erro2') {
                ?>
                  <div class="vermelho centralizado">
                    Faça o Login antes de acessar as paginas protegidas!!!
                  </div>
                <?php } ?>

            </form>
        </section>
</body>
</html>