<?php
	include_once("conexao.php");
        
	$id_obra = $_POST['idObra'];
   
    //echo $titulo_obra;
	
    $result_obra = "UPDATE obra SET exemplares = (exemplares+1) WHERE id = '$id_obra'";
                
	$resultado_obra = mysqli_query($conn, $result_obra);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/obra.php'>
					<script type=\"text/javascript\">
						alert(\"Obra atualizada com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/obra.php'>
					<script type=\"text/javascript\">
						alert(\"A Obra não foi atualizada com Sucesso.\");
					</script>
				";	
			
    }
?>