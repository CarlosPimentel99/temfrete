<?php 

  require_once "validador_acesso.php"

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cadastrar um novo frete">
    <title>Área do Cliente - Novo Frete</title>
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
            <a class="cabecalho-item"  href="logoff.php"><button class="red"><img class="cabecalho-item-icone" alt="logout" src="img/icons/logout.svg">SAIR</button></a>
        </nav>
    </header>

    <div class="novo-frete">
      <!-- <?php if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
        <div class="bg-success pt-2 text-white d-flex justify-content-center">
          <h5>Carga inserida com sucesso!</h5>
        </div>
      <?php } ?> --> 
    
      <section class="novo-frete-conteudo">
        <h3 class="login-conteudo-titulo vermelho"><strong>Digite todas as informações para cadastrar um novo frete!</strong></h3>
        <form class="login-formulario" method="POST" action="frete_controller.php?acao=inserir">

            <div class="login-formulario-barra">
                <img class="icone" alt="Título do frete" src="img/icons/titulo-frete.svg">
                <input class="login-conteudo-input cinza" type="text" placeholder="Título do frete" name="titulo" required>
            </div>
            
            <div class="login-formulario-barra">
                <img class="icone" alt="Tipo do caminhao" src="img/icons/tipo-caminhao.svg">                
                <select name="tp_caminhao" class="login-conteudo-input cinza">
                  <option value="" disabled selected>Tipo do caminhão</option>
                  <option value="3/4">3/4</option>
                  <option value="TOCO">TOCO</option>
                  <option value="TRUCK">TRUCK</option>
                  <option value="BITRUCK">BITRUCK</option>
                  <option value="CARRETA">CARRETA</option>
                  <option value="BITREM">BITREM</option>
                  <option value="RODOTREM">RODOTREM</option>
                </select>
            </div>

            <div class="login-formulario-barra">
                <img class="icone" alt="Peso da carga" src="img/icons/peso-carga.svg">
                <input class="login-conteudo-input cinza" type="text" placeholder="Peso da carga" name="peso_carga" required>
            </div>

            <div class="login-formulario-barra">
                <img class="icone" alt="Local coleta" src="img/icons/local-coleta.svg">
                <input class="login-conteudo-input cinza" type="text" placeholder="Local de coleta, ex: endereço, número, bairro, cidade e estado" name="local_coleta" required>
            </div>

            <div class="login-formulario-barra">
                <img class="icone" alt="Local destino" src="img/icons/local-destino.svg">
                <input class="login-conteudo-input cinza" type="text" placeholder="Local do destino, ex: endereço, número, bairro, cidade e estado" name="local_entrega" required>
            </div>

            <div class="login-formulario-barra">
                <img class="icone" alt="Observação" src="img/icons/interrogation.svg">
                <input class="login-conteudo-input cinza" type="text" placeholder="Observação do Frete" name="observacao">
            </div>

            <div class="login-formulario-barra">
                <img class="icone" alt="Valor do frete" src="img/icons/valor-frete.svg">
                <input class="login-conteudo-input cinza" type="text" placeholder="Valor do frete R$" name="valor" required>
            </div>

            <?php 
                if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { 
                ?>            
                <div class="verde centralizado">
                    <h5>Carga inserida com sucesso!</h5>
                </div>
            <?php } 
                elseif(isset($_GET['inclusao']) && $_GET['inclusao'] != 1 ) {
                ?>
                <div class="vermelho centralizado">
                    <h5>Erro ao inserir carga! </h5>                               
                </div>
            <?php } ?>
            
            <div class="login-formulario-barra">
                <a href="home_adm.php">
                <button class="botao-vermelho branco" type="button">
                    <img class="icone" alt="voltar" src="img/icons/voltar.svg">
                    VOLTAR</button>
                </a>

                <button class="botao-vermelho branco" type="submit">
                    <img class="icone" alt="salvar" src="img/icons/salvar.svg">
                    SALVAR</button>
            </div>
        </form>
    </section>
</div>

</body>
</html>