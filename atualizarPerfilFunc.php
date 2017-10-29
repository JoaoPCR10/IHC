<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Atualizar Perfil</title>

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
            <li class="nav-item active">
              <a class="nav-link" href="#">Perfil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="consultarAcervoF.php">Consultar Acervo</a>
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

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          
            <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link " href="#">Perfil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reservasFunc.php">Reservas</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="obra.php">Obras</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="emprestimo.php">Emprestimo </a>
            </li>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="devolucao.php">Devolução</a>
            </li>
          </ul>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="atualizarPerfilFunc.php">Atualizar Perfil<span class="sr-only">(current)</span></a>
            </li>
             <br><br><br><br>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="class/logout.php"><button class="btn btn-outline-danger" >Logout</button></a>
            </li>
          </ul>
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h3 class="display-4">ATUALIZAR PERFIL</h3>
            
            
            <?php 
            
    include("class/conexao.php");

	if(!isset($_SESSION))
        session_start();

        $sql_code = "SELECT * FROM usuario WHERE id = '$_SESSION[id]'";
		$con = $mysqli->query($sql_code) or die($mysqli->error);
		$dado = $con->fetch_assoc();
               
        echo $_SESSION['usuario_conectado'];
?>
              
            <form method="POST" action="atlz_cad_usuario.php?id=<?php echo $dado["id"]; ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" name="nome" value="<?php echo $dado ["nome"];  ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Sobrenome</label>
      <input type="text" class="form-control" name="sobrenome" value="<?php echo $dado ["sobrenome"];  ?>">
    </div>
  </div>
    <div class="form-row">
        <div class="form-group col-md-6">
      <label for="inputState">Sexo</label>
      <select id="inputState" name="sexo" class="form-control">
        <option selected><?php echo $dado ["sexo"];  ?></option>
        <option>Feminino</option>
        <option>Masculino</option>
        <option>Prefiro não optar</option>
            </select></div>
     </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Curso</label>
      <input type="text" class="form-control" name="curso" value="<?php echo $dado ["curso"];  ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Matrícula</label>
      <input type="text" class="form-control" name="matricula"  value="<?php echo $dado ["matricula"];  ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="text" class="form-control" name="email" value="<?php echo $dado ["email"];  ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" name="senha" value="<?php echo $dado ["senha"];  ?>">
    </div>
  </div>
        <br>        
  <div class="form-group"> 
       <input class="btn btn-primary btn-lg" type="submit" value="Atualizar">
  </div>
  
            </form></div></main>
      
</form>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
