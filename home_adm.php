<?php 
  require_once "validador_acesso.php"
?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>Tem Frete</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <style>
      .card-home {
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
        Tem Frete
      </a>
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="logoff.php">SAIR</a>
          </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Fretes
            </div>
            <div class="card-body">
              <div class="row">                
                <div class="col-6 d-flex justify-content-center">                                    
                  <a href="criar_carga.php">                    
                    <img src="img/criar_carga.png" width="70" height="70">                    
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_carga.php">
                    <img src="img/consultar_carga.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Motorista
            </div>
            <div class="card-body">
                <div class="row">                
                <div class="col-6 d-flex justify-content-center">                  
                  <a href="consultar_motorista.php">                    
                    <img src="img/consultar_carga.png" width="70" height="70">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>