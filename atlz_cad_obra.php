<?php
	include_once("conexao.php");

	$obra_codigo = intval($_GET['id']);
    echo $obra_codigo;
        
	$titulo_obra = $_POST['txt_titulo_obra'];
	$autor_obra = $_POST['txt_autor_obra'];
    $assunto_obra = $_POST['txt_assunto_obra'];
	$editora_obra = $_POST['txt_editora_obra'];
    $ano_obra = $_POST['txt_ano_obra'];
	$exemplares_obra = $_POST['txt_exemplares_obra'];
   
    echo $titulo_obra;
	
    $result_obra = "UPDATE obra SET 
                titulo = '$titulo_obra', 
				autor = '$autor_obra', 
				assunto = '$assunto_obra', 
				editora = '$editora_obra', 
				ano = '$ano_obra', 
				exemplares = '$exemplares_obra'
				WHERE id = '$obra_codigo'";
                
	$resultado_obra = mysqli_query($conn, $result_obra);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/obra.php'>
					<script type=\"text/javascript\">
						alert(\"Obra atualizada com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/obra.php'>
					<script type=\"text/javascript\">
						alert(\"A Obra não foi atualizada com Sucesso.\");
					</script>
				";	
			
    }
?>