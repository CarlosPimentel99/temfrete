<?php require_once "validador_acesso.php" ?>

<?php
  $acao = 'carregar';  
  require 'motorista_controller.php';  
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Editar Motorista</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#cpf").mask("000.000.000-00");
      $("#telefone").mask("(00) 00000-0000");
      $("#placa").mask("AAA-0A00");

    })
  </script>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home_adm.php">
        <img src="img/temfrete.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Motorista
      </a>
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="logoff.php">SAIR</a>
          </li>
      </ul> 
    </nav>  

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Edição do Motorista
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="POST" action="motorista_controller.php?acao=atualizar">

                    <?php foreach($motorista as $user => $motorista) { ?>


                    <input name="id" type="hidden" class="form-control" placeholder="id" value="<?= $motorista->id?>">

                    <div class="form-group">
                      <label>Nome Motorista</label>
                      <input name="nome" type="text" class="form-control" placeholder="Nome Motorista" value="<?= $motorista->nome?>">
                    </div>
                    
                    
                    <div class="form-group">
                      <label>Telefone</label>
                      <input name="telefone" id="telefone"0 type="text" class="form-control" placeholder="Telefone" value="<?= $motorista->telefone?>">
                    </div>

                    <div class="form-group">
                      <label>CPF</label>
                      <input name="cpf" id="cpf" placeholder="CPF" class="form-control" value="<?=$motorista->cpf?>"></input>
                    </div>

                    <div class="form-group">
                      <label>Placa</label>
                      <input name="placa" id="placa" placeholder="Placa do Veículo" class="form-control" value="<?=$motorista->placa?>"></input>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a href="home_adm.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Salvar</button>
                      </div>
                    </div>

                     <?php } ?>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>