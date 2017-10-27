
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
              <a class="nav-link" href="pagUsuario.php">Perfil </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="consultarArcevoF.ph">Consultar Acervo<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.php">Sobre</a>
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
          <h2 class="display-4">CONSULTAR ACERVO</h2>
			<br><br>
              
               <form method="POST" action="buscaAcervoF.php">
                <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Procurar por:</label>
      <select name="filtro" id="inputState" class="form-control">
        <option selected>Escolher...</option>
        <option>Título</option>
        <option>Autor</option>
        <option>Assunto</option>
        <option>Editora</option>
        <option>Ano</option>
      </select>
    </div>
    <div class="form-group col-md-8">
      <label for="inputCity"><br></label>
      <input type="text" name="busca" class="form-control" id="inputCity">
    </div>
    
  </div>   

  <br>
  <div class="form-group"> 
       <input class="btn btn-primary btn-lg" type="submit" value="Buscar">
  </div>
  
            </form></main>
      

      
      
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
