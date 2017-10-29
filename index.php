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
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>SCB - Sistema de Controle de Biblioteca</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">SCB</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="sobreNL.php">Sobre</a>
                <a class="nav-link" href="cadastro.php">Cadastrar</a>
                <a class="nav-link" href="#"></a>
                  
                <!--LOGIN-->
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
         
            </div>
          </header>

          <main role="main" class="inner cover">     
            <h1 class="cover-heading">SCB - Sistema de Controde de Biblioteca</h1>
            <p class="lead">Um Sistema de Controle de Biblioteca feito sob medida para os alunos e bibliotecários. </p>
            <p class="lead">
              <a href="login.php" class="btn btn-lg btn-secondary">Entrar</a>
            </p>
          </main>

          <footer class="mastfoot">
            <div class="inner">
              <p>Desenvolvido para disciplina de Interação Humano Computador de 2017.3 da UFJF.</p>
            </div>
          </footer>

        </div>

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
