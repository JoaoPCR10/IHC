<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cadastro de Usuário</title>

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
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          </ul>
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
		<option value="">Selecione</option>
		<option value="1" >Aluno</option>
		<option value="2" >Bibliotecário</option>
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
