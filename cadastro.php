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
            <li class="nav-item">
            <a class="nav-link" href="sobre.php">Sobre </a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="cadastro.php">Cadastro <span class="sr-only">(current)</span></a>
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
      <br><br><br>
        <div class="container">
          <h1 class="display-3">CADASTRO</h1>
            <br>

              
            <form method="POST" action="processa_cad_usuario.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Sobrenome</label>
      <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
    </div>
  </div>
    <div class="form-row">
        <div class="form-group col-md-6">
      <label for="inputState">Sexo</label>
      <select id="inputState" class="form-control" name="sexo">
        <option selected>Escolher...</option>
        <option>Feminino</option>
        <option>Masculino</option>
        <option>Prefiro não optar</option>
            </select></div>
            <div class="form-group col-md-6">
      <label for="niveldeacesso">Sou</label>
      <select id="inputState" class="form-control" name="niveldeacesso">
		<option>Selecione</option>
		<option>Aluno</option>
		<option value="Bibliotecario">Bibliotecário</option>
	</select>
      </div>
                </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Curso</label>
      <input type="text" class="form-control" name="curso" placeholder="Curso">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Matrícula</label>
      <input type="text" class="form-control" name="matricula"  placeholder="Matrícula">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="text" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" name="senha" placeholder="Senha">
    </div>
  </div>
        <br>        
  <div class="form-group"> 
       <input class="btn btn-primary btn-lg" type="submit" value="Cadastrar">
  </div>
  
            </form></div></main>
      
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
