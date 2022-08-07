<?php require_once "validador_acesso.php" ?>
<?php
  $acao = 'carregar';  
  require 'motorista_controller.php';  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cadastrar um novo frete">
    <title>Área do Cliente - Alterar cadastro motorista</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="img/icons/favicon.svg">
</head>

<script type="text/javascript">
    $(document).ready(function(){
      $("#cpf").mask("000.000.000-00");
      $("#telefone").mask("(00) 00000-0000");
      $("#placa").mask("AAA-0A00");
    })
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

    <div class="novo-frete">
    
    <section class="alterar-motoristas">
        <h3 class="login-conteudo-titulo vermelho"><strong>Altere o cadastro do motorista!</strong></h3>
        <form class="login-formulario" method="POST" action="motorista_controller.php?acao=atualizar">

          <?php foreach($motorista as $user => $motorista) { ?>

            <input name="id" type="hidden" class="form-control" placeholder="id" value="<?= $motorista->id?>">

            <div class="login-formulario-barra">
                <img class="icone" alt="Nome do motorista" src="img/icons/nome-motorista.svg">
                <input class="login-conteudo-input cinza" type="text" placeholder="Nome" name="nome" value="<?= $motorista->nome?>" required>
            </div>
            
            <div class="login-formulario-barra">
                <img class="icone" alt="Telefone" src="img/icons/telefone-motorista.svg">
                <input class="login-conteudo-input cinza" type="text" placeholder="Telefone" name="telefone" id="telefone" value="<?= $motorista->telefone?>" required>
            </div>

            <div class="login-formulario-barra">
                <img class="icone" alt="CPF" src="img/icons/cpf-motorista.svg">
                <input class="login-conteudo-input cinza" type="text" placeholder="CPF" name="cpf" id="cpf" value="<?=$motorista->cpf?>" required>
            </div>

            <div class="login-formulario-barra">
                <img class="icone" alt="Placa" src="img/icons/tipo-caminhao.svg">
                <input class="login-conteudo-input cinza" type="text" placeholder="Placa" name="placa" id="placa" value="<?=$motorista->placa?>" required>
            </div>

            <!-- <div class="login-formulario-barra">
                <img class="icone" alt="Tipo motorista" src="img/icons/tipo-motorista.svg">
                <input class="login-conteudo-input cinza" type="text" placeholder="Tipo motorista" name="tipo-motorista" required>
            </div> -->

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

            <?php } ?>
        </form>
    </section>
</div>

</body>
</html>