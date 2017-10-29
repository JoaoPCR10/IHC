<?php
	include_once("conexao.php");

	$reserva_codigo = intval($_GET['id']);
	
    $result_obra = "DELETE FROM reserva WHERE id='$reserva_codigo'";

	$resultado_obra = mysqli_query($conn, $result_obra);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/reservasAluno.php'>
					<script type=\"text/javascript\">
						alert(\"Reserva cancelada com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/reservasAluno.php'>
					<script type=\"text/javascript\">
						alert(\"A Reserva não foi cancelada com Sucesso.\");
					</script>
				";	
			
    }
?>