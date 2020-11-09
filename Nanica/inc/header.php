<?php
session_start();

if (isset($_SESSION['login'])) {
  $var_perfil = '/perfil.php';
  $var_cadastro = '/index.php';
} else {
  //echo '<script> alert("Você não está logado! Faça seu login.")</script>';
  //echo '<script>window.location.href = "/index.php";</script>';
  $var_perfil = '/index.php';
  $var_cadastro = '/cadastro_usuario.php';
}

?>

<!doctype html>
<html lang="pt-br">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DK28527C7X"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-DK28527C7X');
</script>


<head>
  <!-- Required meta tags -->
  <?php header("Content-type: text/html; charset=utf-8"); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:locale" content="pt_BR">
  <!-- Site Name, Title, and Description to be displayed -->

  <meta property="og:site_name" content="Nanica Cestas Orgânicas">
  <meta property="og:title" content="Nanica Cestas Orgânicas ">
  <meta property="og:description" content="Nanica melhor site de cestas orgânicas">
  <!-- Image to display -->
  <!-- Replace   «example.com/image01.jpg» with your own -->
  <meta property="og:image" itemprop="image" content="http://nanicaorganicos.com.br/imagens/Logo.jpeg">
  <!-- No need to change anything here -->
  <meta property="og:type" content="website" />
  <meta property="og:image:type" content="image/jpeg">
  <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
  <meta property="og:image:width" content="300">
  <meta property="og:image:height" content="300">
  <!-- Website to visit when clicked in fb or WhatsApp-->
  <meta property="og:url" content="http://nanicaorganicos.com.br/">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/bootstrap-datepicker.min.css">
  <script src="https://kit.fontawesome.com/58e51c1916.js" crossorigin="anonymous"></script>


  <title>Nanica Orgânicos!</title>
</head>

<header>


  <!-- Código menu -->
  <nav class="navbar navbar-light navbar-expand-md" style="background-color: #147039;">
    <div class="container-fluid">
      <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="/">
        <img data-toogle="tooltip" src="/imagens/Logo01.png" href="/" style="width: 200px;" title="home">
      </a>

      <div class="collapse navbar-collapse" id="navcol-1" style="font-family: 'Averia Libre', cursive;">
        <ul class="nav navbar-nav">
          <li class="nav-item" role="presentation"><a class="nav-link active" href="/cestas.php" style="color: rgb(254,251,251);font-size: 20px;font-family: 'Averia Libre', cursive;">Cestas</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="/sobre.php" style="color: rgb(251,250,250);font-size: 20px;font-family: 'Averia Libre', cursive;">Sobre</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="/receitas.php" style="color: rgb(251,250,250);font-size: 20px;font-family: 'Averia Libre', cursive;">Receitas</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="/suporte.php" style="color: rgb(251,250,250);font-size: 20px;font-family: 'Averia Libre', cursive;">Suporte</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="/cadastro_fornecedor.php" style="color: rgb(251,250,250);font-size: 20px;font-family: 'Averia Libre', cursive;">Parcerias</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="/teste.php" style="color: rgb(251,250,250);font-size: 20px;font-family: 'Averia Libre', cursive;">Teste</a></li>
        </ul>
      </div>



      <!-- Inicio Busca rápida -->

      <div class="float-right">
        <a href="#" data-toggle="modal" data-target="#buscaRapida">
          <i class="fa fa-search border-white ml-auto" data-toggle="tooltip" data-bs-tooltip="" style="font-size: 20px;color: rgb(236,239,242);padding: 40px;" title="Busca rápida">
          </i>
        </a>
      </div>

      <!-- Fim da Busca rápida -->



      <!-- Modal -->
      <div class="modal fade" id="buscaRapida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Busca Rápida</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="recipient-name">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Fim do busca rápida -->




      <!-- Inicio modal Sacola -->
      <div class="float-right">
        <a href="#" data-toggle="modal" data-target="#modalExemplo">
          <i class="fa fa-shopping-basket border-white" style="font-size: 20px;color: rgb(236,239,242);"></i>
        </a>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php

              if (isset($_SESSION['login'])) {
                $var_perfil = '/perfil.php';
                $var_cadastro = '/index.php';
              ?>

                <a class="dropdown-item" href="<?php echo $var_perfil; ?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="/carrinho.php">
                  <i class="fa fa-shopping-basket border-white"></i>
                  Pedido
                </a>
                <a class="dropdown-item" href="/pedido_status.php">
                  <i class="fas fa-truck"></i>
                  Status Pedido
                </a>
                <a class="dropdown-item" onclick="sair()">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>

              <?php
              } else {
                //echo '<script> alert("Você não está logado! Faça seu login.")</script>';
                //echo '<script>window.location.href = "/index.php";</script>';
                $var_perfil = '/index.php';
                $var_cadastro = '/cadastro_usuario.php';
              ?>
                <a class="dropdown-item" href="<?php echo $var_cadastro; ?>">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cadastrar-se
                </a>
                <a class="dropdown-item" href="/login.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logar
                </a>
                <div class="dropdown-divider"></div>

              <?php
              }

              ?>


              <!--<a class="dropdown-item" href="">
                <i class="fa fa-shopping-basket border-white"></i>
                Perfil
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Pedidos
              </a>
              <a class="dropdown-item" href="">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Cadastrar-se
              </a>
              <a class="dropdown-item" href="/login.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Logar
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" onclick="sair()">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Sair
              </a>-->
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
      <!-- Fim modal Sacola -->


      <!--<div class="row">
        <img src="imagens/brasil.png">
        <img src="imagens/estados-unidos.png">
      </div>-->


    </div>
    </div>
  </nav>
  <!-- Fim do Código menu -->
</header>