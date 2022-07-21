<?php require_once "validador_acesso.php" ?>

<?php
  $acao = 'recuperar';
  require 'motorista_controller.php';
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Consulta de Cargas</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <script>
    function remover(id) {
        location.href = 'consultar_motorista.php?acao=remover&id='+id;
      }

    /*function inativar(id) {
        location.href = 'consultar_motorista.php?acao=inativar&id='+id;
      }

    function ativar(id) {
        location.href = 'consultar_motorista.php?acao=ativar&id='+id;
      } */

  </script>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home_adm.php">
        <img src="img/temfrete.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Consulta de Motoristas
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

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
    

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Motoristas Cadastrados
            </div>
            
            <div class="card-body">

              <?php foreach($motorista as $user => $motorista) { ?>

                <div class="card mb-3 bg-light">                  
                  <div class="card-body">
                    <h5 class="card-title" id="motorista_<?= $motorista->id ?>">Nome: <?= $motorista->nome?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Telefone: <?= $motorista->telefone ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">CPF: <?= $motorista->cpf ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Placa: <?= $motorista->placa ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Tipo Motorista: <?= $motorista->tipoMotorista ?></h6
                  </div>
                  <div class="row mt-5">
                      <div class="col-6">
                        <a href="#" class="btn btn-lg btn-danger btn-block" onclick="remover(<?= $motorista->id ?>)"></i>Excluir</a>
                      </div>
                      <div class="col-6">
                        <a href="editar_motorista.php?id=<?= $motorista->id ?>" class="btn btn-lg btn-info btn-block">Editar</a>
                      </div>                        
                    </div>
                </div>
              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home_adm.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>