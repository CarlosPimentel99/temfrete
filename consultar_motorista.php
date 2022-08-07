<?php require_once "validador_acesso.php" ?>
<?php
  $acao = 'recuperar';
  require 'motorista_controller.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Consultar todos os fretes cadastradis">
    <title>Área do Cliente - Motoristas Cadastrados</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="img/icons/favicon.svg">
</head>

<script>
    function remover(id) {
        location.href = 'consultar_motorista.php?acao=remover&id='+id;
      }
</script>

<body class="logado-tela-fundo">
<header class="cabecalho">
        <div class="cabecalho-item-principal">
        <a href="home_adm.php"><h1 class="branco">TEM FRETE</h1></a>
        </div>
        <nav class="cabecalho-menu">
          <a class="cabecalho-item"  href="logoff.php"><button class="red"><img class="cabecalho-item-icone" alt="logout" src="img/icons/logout.svg">SAIR</button></a>
        </nav>
    </header>

    <?php if( isset($_GET['msg']) && $_GET['msg'] == 'sucesso' ) { ?>
      <div class="alert success branco">
          <span class="closebtn">&times;</span>  
          <strong>Sucesso!</strong> Processo executado perfeitamente!
      </div>
    <?php } ?>
    <?php if( isset($_GET['msg']) && $_GET['msg'] == 'erro' ) { ?>
      <div class="alert error branco">
          <span class="closebtn">&times;</span>  
          <strong>Erro!</strong> Problemas ao executar o processo!
      </div>
    <?php } ?>

    <?php $contador = 0; ?>

    <?php foreach($motorista as $user => $motorista) { ?>

    <!-- verificar se contador é igual a zero -->
    <?php if($contador == 0) { ?>
      <section class="conteudo">
    <?php } ?>

        <div class="conteudo-caixa-consultar-motoristas">

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Nome" src="img/icons/nome-motorista.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Nome</p>
                </div>
                <p class="conteudo-caixa-titulo preto" id="motorista_<?= $motorista->id ?>"><strong><?= $motorista->nome?></strong></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Nome" src="img/icons/telefone-motorista.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Telefone</p>
                </div>
                <p class="conteudo-caixa-titulo preto"><?= $motorista->telefone ?></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Tipo do caminhao" src="img/icons/cpf-motorista.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">CPF</p>
                </div>
                <p class="conteudo-caixa-titulo preto"><?= $motorista->cpf ?></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Peso da carga" src="img/icons/tipo-caminhao.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Placa</p>
                </div>
                <p class="conteudo-caixa-titulo preto"><?= $motorista->placa ?></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Local da coleta" src="img/icons/tipo-motorista.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Tipo motorista</p>
                </div>
                <p class="conteudo-caixa-titulo preto"><?= $motorista->tipoMotorista ?></p>
            </div>

            <div class="login-formulario-barra">
              <a onclick="remover(<?= $motorista->id ?>)">
                <button class="botao-preto branco" type="button">
                    <img class="icone" alt="excluir" src="img/icons/excluir.svg">
                    EXCLUIR</button>
              </a>
              <a href="editar_motorista.php?id=<?= $motorista->id ?>">
                <button class="botao-preto branco" type="button">
                    <img class="icone" alt="editar" src="img/icons/editar.svg">
                    EDITAR</button>
              </a>
            </div>
        </div>
      <?php if($contador == 1) { ?>
        </section>        
      <?php } ?>
      
      <?php $contador ++; ?>            

      <?php if($contador == 2) { ?>        
        <?php $contador =0; ?>            
      <?php } ?>
    <?php } ?>
</body>
</html>