<?php
	include_once("conexao.php");
	$titulo_obra = $_POST['txt_titulo_obra'];
	$autor_obra = $_POST['txt_autor_obra'];
    $assunto_obra = $_POST['txt_assunto_obra'];
	$editora_obra = $_POST['txt_editora_obra'];
    $ano_obra = $_POST['txt_ano_obra'];
	$exemplares_obra = $_POST['txt_exemplares_obra'];
   
    //echo "$nome_obra - $email_obra";
	
    $result_obra = "INSERT INTO obra(titulo, autor, assunto, editora, ano, exemplares) VALUES ('$titulo_obra','$autor_obra','$assunto_obra','$editora_obra','$ano_obra','$exemplares_obra')";
	$resultado_obra = mysqli_query($conn, $result_obra);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastroObra.php'>
					<script type=\"text/javascript\">
						alert(\"Obra cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastroObra.php'>
					<script type=\"text/javascript\">
						alert(\"A Obra não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>

