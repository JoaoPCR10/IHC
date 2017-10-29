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

    <title>Atualizar Obra</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">SCB</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="pagUsuario.php">Perfil </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="consultarAcervo.php">Consultar Acervo<span class="sr-only">(current)</span></a>
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
    </header>
<main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <br><br>
        <div class="container">
          <h1 class="display-3">ATUALIZAR OBRA</h1>

              
            
            <?php 
            
    include("class/conexao.php");

	if(!isset($_GET['id']))
		echo "<script> alert('Codigo invalido.'); location.href='index.php?p=inicial'; </script>";
	else{

	$obra_codigo = intval($_GET['id']);
            
            
        $sql_code = "SELECT * FROM obra WHERE id = '$obra_codigo'";
		$con = $mysqli->query($sql_code) or die($mysqli->error);
		$dado = $con->fetch_assoc();
               
    }
?>
            
            
            
               <form method="POST" action="atlz_cad_obra.php?id=<?php echo $dado["id"]; ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Título</label>
      <input type="text" class="form-control" name="txt_titulo_obra" value="<?php echo $dado ["titulo"];  ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Autor</label>
      <input type="text" class="form-control" name="txt_autor_obra"  value="<?php echo $dado ["autor"];  ?>">
    </div>
                   </div>   
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Assunto</label>
      <input type="text" class="form-control" name="txt_assunto_obra" value="<?php echo $dado ["assunto"];  ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Editora</label>
      <input type="text" class="form-control" name="txt_editora_obra"  value="<?php echo $dado ["editora"];  ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Ano de Publicação</label>
      <input type="text" class="form-control" name="txt_ano_obra"  value="<?php echo $dado ["ano"];  ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Número de Exemplares</label>
      <input type="number" class="form-control" name="txt_exemplares_obra" value="<?php echo $dado ["exemplares"];  ?>">
    </div>
  </div>
                   <br>
      <div class="form-group"> 
          <input class="btn btn-primary btn-lg" type="submit" value="Atualizar">
  </div>
  
            </form></main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
