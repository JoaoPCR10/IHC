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

    <title>Consultar Acervo</title>

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
              <a class="nav-link" href="sobre.php">Sobre</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <a href="class/logout.php"><button class="btn btn-outline-danger" >Logout</button></a>
          </form>
        </div>
      </nav>
    </header>

        <main role="main" class="col-sm-6 ml-sm-auto col-md pt-3">
        
<?php
    $filtro = $_POST['filtro'];
    $busca = $_POST['busca'];
    //echo "$filtro";
    if($filtro=='Título'){
        $consulta = "SELECT * FROM obra WHERE titulo LIKE '%$busca%'";
        $con = $mysqli->query($consulta) or die ($mysqli->error());
    }else if($filtro=='Autor'){
        $consulta = "SELECT * FROM obra WHERE autor LIKE '%$busca%'";
        $con = $mysqli->query($consulta) or die ($mysqli->error());
    }else if($filtro=='Assunto'){
        $consulta = "SELECT * FROM obra WHERE assunto LIKE '%$busca%'";
        $con = $mysqli->query($consulta) or die ($mysqli->error());
    }else if($filtro=='Editora'){
        $consulta = "SELECT * FROM obra WHERE editora LIKE '%$busca%'";
        $con = $mysqli->query($consulta) or die ($mysqli->error());
    }else if($filtro=='Ano'){
        $consulta = "SELECT * FROM obra WHERE ano LIKE '%$busca%'";
        $con = $mysqli->query($consulta) or die ($mysqli->error());
    }else 
   
?>              
            
          <h2>Resultado da Busca</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>Título</th>
                  <th>Autor</th>
                  <th>Assunto</th>
                  <th>Editora</th>
                  <th>Ano</th>
                  <th>Nº de Exemplares</th>
                  <th>Reservar</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($dado = $con->fetch_array()){ ?>
                <tr>
                  <td><?php echo $dado ["id"]; ?></td>
                  <td><?php echo $dado ["titulo"]; ?></td>
                  <td><?php echo $dado ["autor"]; ?></td>
                  <td><?php echo $dado ["assunto"]; ?></td>
                  <td><?php echo $dado ["editora"]; ?></td>
                  <td><?php echo $dado ["ano"]; ?></td>
                  <td><?php echo $dado ["exemplares"]; ?></td>
                  <td><a href="reservarObra.php?id=<?php echo $dado["id"]; ?>">Reservar</a></td>
                </tr>
                  <?php } ?>
              </tbody>
            </table>
          </div>
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
