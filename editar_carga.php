<?php require_once "validador_acesso.php" ?>

<?php
  $acao = 'carregar';  
  require 'frete_controller.php';  
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Editar Frete</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home_adm.php">
        <img src="img/temfrete.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Frete de Carga
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
              Edição de Carga
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="POST" action="frete_controller.php?acao=atualizar">

                    <?php foreach($frete as $user => $frete) { ?>
                        
                    <p>Teste</p>

                    <input name="id" type="hidden" class="form-control" placeholder="id" value="<?= $frete->id_frete?>">

                    <div class="form-group">
                      <label>Título Frete</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título" value="<?= $frete->titulo?>">
                    </div>
                    
                    
                    <div class="form-group">
                      <label>Tipo caminhão</label>
                      <select name="tp_caminhao" class="form-control">
                        <option value="3/4">3/4</option>
                        <option value="TOCO">TOCO</option>
                        <option value="TRUCK">TRUCK</option>
                        <option value="BITRUCK">BITRUCK</option>
                        <option value="CARRETA">CARRETA</option>
                        <option value="BITREM">BITREM</option>
                        <option value="RODOTREM">RODOTREM</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Peso da Carga:</label>
                      <input name="peso_carga" type="text" class="form-control" placeholder="Peso da Carga" value="<?= $frete->peso_carga?>">
                    </div>

                    <div class="boxtut">
                      <label>Local de Coleta</label>
                      <textarea name="local_coleta" placeholder="Endereço, Número, Bairro, Cidade, Estado" class="form-control" rows="2"><?=$frete->local_coleta?></textarea>
                    </div>

                    <div class="form-group">
                      <label>Local de Destino</label>
                      <textarea name="local_entrega" placeholder="Endereço, Número, Bairro, Cidade, Estado" class="form-control" rows="2"><?=$frete->local_entrega?></textarea>
                    </div>

                    <div class="form-group">
                      <label>Valor do Frete:</label>
                      <input name="valor" type="text" class="form-control" placeholder="R$ Frete" value="<?= $frete->valor?>">
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