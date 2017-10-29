<?php
    include("class/conexao.php");
    if(!isset($_SESSION))
        session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cadastrar Obra</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">SCB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="pagUsuarioFunc.php">Perfil </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="consultarArcevoF.ph">Consultar Acervo<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobreF.php">Sobre</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <a href="class/logout.php"><button class="btn btn-outline-danger" >Logout</button></a>
          </form>
        </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <br><br><br>
        <div class="container">
          <h1 class="display-3">CADASTRO DE OBRA</h1>
			<br><br>
              
               <form method="POST" action="processa_cad_obra.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Título</label>
      <input type="text" class="form-control" name="txt_titulo_obra" placeholder="Título">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Autor</label>
      <input type="text" class="form-control" name="txt_autor_obra"  placeholder="Autor">
    </div>
                   </div>   
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Assunto</label>
      <input type="text" class="form-control" name="txt_assunto_obra" placeholder="Assunto">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Editora</label>
      <input type="text" class="form-control" name="txt_editora_obra"  placeholder="Editora">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Ano de Publicação</label>
      <input type="text" class="form-control" name="txt_ano_obra"  placeholder="Ano de Publicação">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Número de Exemplares</label>
      <input type="number" class="form-control" name="txt_exemplares_obra" placeholder="Nº de Exemplares">
    </div>
  </div>
                   <br>
      <div class="form-group"> 
       <input class="btn btn-primary btn-lg" type="submit" value="Cadastrar">
  </div>
  
            </form></main>
      
</form>
   <!-- <footer class="mastfoot">
            <div class="inner">
              <p>Desenvolvido para disciplica de Interação Humano Computador de 2017.3 da UFJF.</p>
            </div>
    </footer>-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
