<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="O melhor aplicativo de fretes do mundo!">
    <title>Tem Frete</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="img/icons/favicon.svg">
</head>
<body>
    <main>
    <div class="cabecalho-cor">
            

        <header class="cabecalho">
            <div class="menu-mobile">
                <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                            <a href="#">Home</a>
                            <a href="#">Download</a>
                            <a href="login.php">LOGIN</a>
                        </div>
                    </div>
                        <button class="botao-menu red" onclick="openNav()">
                            <span >&#9776;</span>
                        </button>
            </div>

            <div class="cabecalho-item-principal">
            <h1 class="branco">TEM FRETE</h1>
            </div>
            <nav class="cabecalho-menu">
                <a class="cabecalho-item" href="#">Home</a>
                <a class="cabecalho-item" href="#">Download</a>
                <a class="cabecalho-item" href="login.php"><button class="red"><img class="cabecalho-item-icone" alt="login" src="img/icons/login.svg">LOGIN</button></a>
            </nav>
        </header>

        <section class="cabecalho-conteudo">
            <div class="cabecalho-conteudo-escrito">
                <h2 class="cabecalho-conteudo-escrito-titulo branco"> Procurando alguma plataforma para fazer frete?</h2>
                <h2 class="cabecalho-conteudo-escrito-subtitulo branco"> Nós temos a solução que você busca! Aqui em nossa plataforma você está no controle de tudo desde em qual carga escolher e até falar diretamente com o responsável da logística.</p>
            </div>
            <img class="cabecalho-conteudo-imagem" alt="Imagem do aplicativo mobile" src="img/mockup.svg">
        </section>
    </div>
        <section class="conteudo">
            <div class="conteudo-caixa">
                <img class="conteudo-caixa-icone" alt="segurança do app" src="img/icons/seguranca.svg">
                <h3 class="conteudo-caixa-titulo vermelho">Segurança</h3>
                <h4 class="conteudo-caixa-subtitulo cinza">Em nossa plataforma todos os seus dados estão seguros!</h4>
            </div>

            <div class="conteudo-caixa">
                <img class="conteudo-caixa-icone" alt="segurança do app" src="img/icons/seguranca.svg">
                <h3 class="conteudo-caixa-titulo vermelho">Praticidade</h3>
                <h4 class="conteudo-caixa-subtitulo cinza">Tudo de maneira fácil e intuitiva para você!</h4>
            </div>

            <div class="conteudo-caixa">
                <img class="conteudo-caixa-icone" alt="segurança do app" src="img/icons/seguranca.svg">
                <h3 class="conteudo-caixa-titulo vermelho">Agilidade</h3>
                <h4 class="conteudo-caixa-subtitulo cinza">Facilidade na busca de cargas e agendamento direto com um representante</h4>
            </div>
        </section>
        
        <section class="rodape-cor">
            <p class="rodape-conteudo branco">Nós estamos na PlayStore, faça seu download agora mesmo!</p>
            <a href="https://play.google.com/store/apps/details?id=com.temfretecarga"><button class="red"><img class="rodape-conteudo-icone" alt="playstore" src="img/icons/playstore.svg">DOWNLOAD</button></a>
        </section>
    </main>
</div>
<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
</body>
</html>