<?php
	include_once("conexao.php");

	$nome_usuario = $_POST['nome'];
	$sobrenome_usuario = $_POST['sobrenome'];
    $sexo_usuario = $_POST['sexo'];
	$curso_usuario = $_POST['curso'];
    $matricula_usuario = $_POST['matricula'];
    $acesso_usuario = $_POST['niveldeacesso'];
	$email_usuario = $_POST['email'];
    $senha_usuario = $_POST['senha'];
    //echo "$nome_usuario - $email_usuario";
	
    $result_usuario = "INSERT INTO usuario (nome, sobrenome, email, senha, sexo, niveldeacesso, curso, matricula) VALUES ('$nome_usuario','$sobrenome_usuario','$email_usuario','$senha_usuario','$sexo_usuario','$acesso_usuario','$curso_usuario','$matricula_usuario')";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"Usuario cadastrado com Sucesso.\");
					</script>
				";	
        header("Location: pagUsuario.php");	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
					<script type=\"text/javascript\">
						alert(\"O Usuario não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>

