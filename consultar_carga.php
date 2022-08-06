<?php require_once "validador_acesso.php" ?>
<?php
  $acao = 'recuperar';
  require 'frete_controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Consultar todos os fretes cadastradis">
    <title>Área do Cliente - Consultar Frete</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="img/icons/favicon.svg">
</head>
<script>
    function remover(id) {
        location.href = 'consultar_carga.php?acao=remover&id='+id;
      }
    function inativar(id) {
        location.href = 'consultar_carga.php?acao=inativar&id='+id;
      }
    function ativar(id) {
        location.href = 'consultar_carga.php?acao=ativar&id='+id;
      } 
</script>

<body class="logado-tela-fundo">
    <header class="cabecalho">
        <div class="cabecalho-item-principal">
        <h1 class="branco">TEM FRETE</h1>
        </div>
        <nav class="cabecalho-menu">
          <a class="cabecalho-item"  href="logoff.php"><button class="red"><img class="cabecalho-item-icone" alt="logout" src="img/icons/logout.svg">SAIR</button></a>
        </nav>
    </header>

    <?php if( isset($_GET['msg']) && $_GET['msg'] == 'sucesso' ) { ?>
      <div class="bg-success pt-2 text-white d-flex justify-content-center">
        <h5>Processo executado com Sucesso!!!</h5>
      </div>
    <?php } ?>
    <?php if( isset($_GET['msg']) && $_GET['msg'] == 'erro' ) { ?>
      <div class="bg-danger pt-2 text-white d-flex justify-content-center">
        <h5>Problemas ao executar processo!!!</h5>
      </div>
    <?php } ?>

    <?php $contador = 0; ?>

    <?php foreach($frete as $user => $frete) { ?>
      
      <!-- verificar se contador é igual a zero -->
      <?php if($contador == 0) { ?>
        <section class="conteudo">
      <?php } ?>

      <?php if($frete->status == 1) { ?>
        <div class="conteudo-caixa-consultar-frete">

            <div class="conteudo-caixa-consultar-status-frete" onclick="ativar(<?= $frete->id_frete ?>)">
                <img class="icone" src="img/icons/status-ativo.svg">
                <p class="preto">ATIVO</p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Titulo do frete" src="img/icons/titulo-frete.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Título do frete</p>
                </div>
                <p class="conteudo-caixa-titulo preto"><strong><?= $frete->titulo?></strong></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Tipo do caminhao" src="img/icons/tipo-caminhao.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Tipo do caminhão</p>
                </div>
                <p class="conteudo-caixa-titulo preto"><?= $frete->tp_caminhao ?></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Peso da carga" src="img/icons/peso-carga.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Peso da carga</p>
                </div>
                <p class="conteudo-caixa-titulo preto"><?= $frete->peso_carga ?> KG</p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Local da coleta" src="img/icons/local-coleta.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Local de coleta</p>
                </div>
                <p class="conteudo-caixa-titulo preto"><?= $frete->local_coleta ?></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Local da coleta" src="img/icons/local-destino.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Local de destino</p>
                </div>
                <p class="conteudo-caixa-titulo preto"><?= $frete->local_entrega ?></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Valor do frete" src="img/icons/valor-frete.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Valor R$</p>
                </div>
                <p class="conteudo-caixa-titulo preto"><?= $frete->valor ?> R$</p>
            </div>

            <div class="login-formulario-barra">
              <a href="#" onclick="remover(<?= $frete->id_frete ?>)">
                <button class="botao-preto branco" type="button">
                  <img class="icone" alt="excluir" src="img/icons/excluir.svg">
                  EXCLUIR
                </button>
              </a>
              <a href="editar_carga.php?id=<?= $frete->id_frete ?>">
               <button class="botao-preto branco" type="button">
                  <img class="icone" alt="editar" src="img/icons/editar.svg">
                  EDITAR
                </button>
              </a>
            </div>
        </div>
      <?php } ?>

      <?php if($frete->status == 2) { ?>
        <div class="conteudo-caixa-consultar-frete"  onclick="inativar(<?= $frete->id_frete ?>)">
            <div class="conteudo-caixa-consultar-status-frete">
                <img class="icone" src="img/icons/status-inativo.svg">              
                  <p class="laranja">INATIVO</p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Titulo do frete" src="img/icons/titulo-frete.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Título do frete</p>
                </div>
                <p class="conteudo-caixa-titulo laranja"><strong><?= $frete->titulo?></strong></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Tipo do caminhao" src="img/icons/tipo-caminhao.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Tipo do caminhão</p>
                </div>
                <p class="conteudo-caixa-titulo laranja"><?= $frete->tp_caminhao ?></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Peso da carga" src="img/icons/peso-carga.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Peso da carga</p>
                </div>
                <p class="conteudo-caixa-titulo laranja"><?= $frete->peso_carga ?> KG</p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Local da coleta" src="img/icons/local-coleta.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Local de coleta</p>
                </div>
                <p class="conteudo-caixa-titulo laranja"><?= $frete->local_coleta ?></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Local da coleta" src="img/icons/local-destino.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Local de destino</p>
                </div>
                <p class="conteudo-caixa-titulo laranja"><?= $frete->local_entrega ?></p>
            </div>

            <div class="conteudo-caixa-consultar-frete-linha">
                <div class="conteudo-caixa-consultar-frete-imagem">
                    <img class="icone" alt="Valor do frete" src="img/icons/valor-frete.svg">
                    <p class="conteudo-caixa-consultar-frete-texto cinza">Valor R$</p>
                </div>
                <p class="conteudo-caixa-titulo laranja"><?= $frete->valor ?> R$</p>
            </div>

            <div class="login-formulario-barra">
              <a href="#" onclick="remover(<?= $frete->id_frete ?>)">
                <button class="botao-laranja branco" type="button">
                    <img class="icone" alt="excluir" src="img/icons/excluir.svg">
                    EXCLUIR</button>
              </a>
              <a href="editar_carga.php?id=<?= $frete->id_frete ?>">
                <button class="botao-laranja branco" type="button">
                    <img class="icone" alt="editar" src="img/icons/editar.svg">
                    EDITAR</button>
              </a>
            </div>
        </div>
      <?php } ?>

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