<?php
	include_once("conexao.php");

	if(!isset($_SESSION))
        session_start();
        
	$nome_usuario = $_POST['nome'];
	$sobrenome_usuario = $_POST['sobrenome'];
    $sexo_usuario = $_POST['sexo'];
    $curso_usuario = $_POST['curso'];
    $matricula_usuario = $_POST['matricula'];
	$email_usuario = $_POST['email'];
    $senha_usuario = $_POST['senha'];
   
    echo $nome_usuario;
	
    $result_obra = "UPDATE usuario SET 
                nome = '$nome_usuario', 
				sobrenome = '$sobrenome_usuario', 
				sexo = '$sexo_usuario', 
				curso = '$curso_usuario', 
				matricula = '$matricula_usuario', 
				email = '$email_usuario',
				senha = '$senha_usuario'
				WHERE id = '$_SESSION[id]'";
                
	$resultado_obra = mysqli_query($conn, $result_obra);
	
?>