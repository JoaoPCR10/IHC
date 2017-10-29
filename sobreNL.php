<?php
if(!isset($_SESSION))
    session_start();

//Login de Usários
if(isset($_POST['login'])){

  include('class/conexao.php');

      $erro = array();

  // Captação de dados
    $senha = $_POST['password'];
    $_SESSION['email'] = $mysqli->escape_string($_POST['email']);

    // Validação de dados
    if(!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL))
        $erro[] = "Preencha seu <strong>e-mail</strong> corretamente.";

    if(strlen($senha) < 6 || strlen($senha) > 16)
        $erro[] = "Preencha sua <strong>senha</strong> corretamente.";

    if(count($erro) == 0){

        $sql = "SELECT senha as senha, id, niveldeacesso FROM usuario WHERE email = '$_SESSION[email]'";
        $que = $mysqli->query($sql) or die($mysqli->error);
        $dado = $que->fetch_assoc();
        
        if($que->num_rows == 0)
            $erro[] = "Nenhum usuário possui o <strong>e-mail</strong> informado.";

        elseif(strcmp($dado['senha'], ($senha)) == 0){
            $_SESSION['usuario_logado'] = $dado['id'];
            $_SESSION['nivel_acesso'] = $dado['niveldeacesso'];
            echo $_SESSION['nivel_acesso'];
            $aluno=strcmp($_SESSION['nivel_acesso'],'Aluno');
            $bibliotecario=strcmp($_SESSION['nivel_acesso'],'Bibliotecario');
        }else
            $erro[] = "<strong>Senha</strong> incorreta.";

        if(count($erro) == 0){
            if($aluno==0)
                echo "<script>location.href='pagUsuario.php';</script>";
            elseif($bibliotecario==0){
                echo "<script>location.href='pagUsuarioFunc.php';</script>";
            }
        }

    }


}


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Sobre o SCB</title>

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
            <a class="nav-link" href="index.php">Home</a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="#">Sobre <span class="sr-only">(current)</span></a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="cadastro.php">Cadastro</a>
          </li>
            <li>
               <div class="dropdown">
                    <?php 
                        if(isset($erro)) 
                            if(count($erro) > 0){ ?>
                                <div class="alert alert-danger">
                                    <?php foreach($erro as $msg) echo "$msg <br>"; ?>
                                </div>
                            <?php 
                            }
                            ?>
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                  <form class="px-4 py-3" method="POST" action="">
                    <div class="form-group">
                      <label for="exampleDropdownFormEmail1">Email</label>
                      <input value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>" class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                    </div>
                    <div class="form-group">
                      <label for="exampleDropdownFormPassword1">Senha</label>
                      < <input class="form-control" required placeholder="Senha" name="password" type="password" value="">
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                          <input name="remember" type="checkbox" value="Remember Me">Lembrar-me

                      </label>
                    </div>
                    <button type="submit" name="login" value="true" class="btn btn-success btn-block">Login</button>
                  </form>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="cadastro.php">Novo por aqui? Cadastre-se</a>
                  <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                  </div>
                </div>  
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-2">SCB</h1>
            <h4>SISTEMA DE CONTROLE DE BIBLIOTECA</h4>
          <p>Esse é um Sistma de Controle de Biblioteca desenvolvido pro alunos da Universudade Federal de Juiz de Fora para a disciplina de Interação Humano Computador DCC174-2017.3.</p>
            <p><b>Prof.:</b>André Luis de Oliveira</p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>João Pedro Carvalho</h2>
            <p>Engenharia Computacional</p>
            <p>201265017AB</p>
          </div>
          <div class="col-md-4">
            <h2>João Victor Guimarães</h2>
            <p>Ciência da Computação</p>
            <p>201465732AC</p>
          </div>
          <div class="col-md-4">
            <h2>Ramon Vaz Larivoir</h2>
            <p>Sistemas de Informação</p>
            <p>201776018</p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
