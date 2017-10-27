<?php
	include_once("conexao.php");

	$obra_codigo = intval($_GET['id']);
	
    $result_obra = "DELETE FROM obra WHERE id='$obra_codigo'";

	$resultado_obra = mysqli_query($conn, $result_obra);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/obra.php'>
					<script type=\"text/javascript\">
						alert(\"Obra ddeletada com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/obra.php'>
					<script type=\"text/javascript\">
						alert(\"A Obra não foi deletada com Sucesso.\");
					</script>
				";	
			
    }
?>