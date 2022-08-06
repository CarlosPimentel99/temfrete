<?php 

  require_once "validador_acesso.php"

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Área do cliente">
    <title>Área do cliente</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="img/icons/favicon.svg">
</head>
<body class="logado-tela-fundo">
    <header class="cabecalho">
        <div class="cabecalho-item-principal">
        <a href="home_adm.php"><h1 class="branco">TEM FRETE</h1></a>
        </div>
        <nav class="cabecalho-menu">
            <a class="cabecalho-item" href="logoff.php"><button class="red"><img class="cabecalho-item-icone" alt="logout" src="img/icons/logout.svg">SAIR</button></a>
        </nav>
    </header>

    <main>
        <section class="conteudo-logado">
            <div class="conteudo-caixa-principal">
                <div class="conteudo-caixa-principal-texto">
                    <h3 class="conteudo-caixa-titulo vermelho">
                        <img class="conteudo-caixa-icone" alt="novo frete" src="img/icons/novo-grande.svg">
                        Novo frete</h3>
                    <h4 class="conteudo-caixa-subtitulo cinza">Para que um novo frete seja disponibilizado, basta cadastra-lo abaixo.</h4>
                    <div class="conteudo-caixa-botao">
                        <a href="criar_carga.php"><button class="botao-vermelho"><img class="icone" alt="consultar motoristas" src="img/icons/novo.svg">NOVO</button></a>
                    </div>
                </div>

                <div class="conteudo-caixa-principal-texto">
                    <h3 class="conteudo-caixa-titulo vermelho">
                        <img class="conteudo-caixa-icone" alt="consultar fretes" src="img/icons/consultar-grande.svg">
                        Consultar Fretes</h3>
                    <h4 class="conteudo-caixa-subtitulo cinza">Aqui você consegue fazer uma verificação rápida de todos os fretes disponíveis.</h4>
                    <div class="conteudo-caixa-botao">
                        <a href="consultar_carga.php"><button class="botao-vermelho"><img class="icone" alt="consultar motoristas" src="img/icons/lupa.svg">CONSULTAR</button></a>
                    </div>
                </div>

            </div>

            <div class="conteudo-caixa-secundaria">                
                <h3 class="conteudo-caixa-titulo vermelho">
                    <img class="conteudo-caixa-icone" alt="consultar" src="img/icons/consultar-grande.svg">
                    Motoristas</h3>
                <h4 class="conteudo-caixa-subtitulo cinza">Aqui você consegue verificar todos os motoristas que temos disponíveis.</h4>
                <div class="conteudo-caixa-botao">
                    <a href="consultar_motorista.php"><button class="botao-vermelho"><img class="icone" alt="consultar motoristas" src="img/icons/lupa.svg">CONSULTAR</button></a>
                </div>
            </div>
        </section>
    </main>
</body>
</html> 