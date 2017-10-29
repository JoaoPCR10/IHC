<?php
	include_once("conexao.php");
    if(!isset($_SESSION))
        session_start();
    
    // Modifica a zona de tempo a ser utilizada. Disnovível desde o PHP 5.1
    date_default_timezone_set('UTC');

    $id_obra = intval($_GET['id']);
    $id_aluno = intval($_SESSION['usuario_logado']);
    $dataEmprestimo = date('Y-m-d');//Data do dia de hoje
    
	$result_emprestimo = "INSERT INTO `reserva`(`id_aluno`, `id_obra`, `data`, `emprestado`) VALUES  ('$id_aluno','$id_obra','$dataEmprestimo','0')";
	$resultado_emprestimo = mysqli_query($conn, $result_emprestimo);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/consultarAcervo.php'>
					<script type=\"text/javascript\">
						alert(\"Obra reservada com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/consultarAcervo.php'>
					<script type=\"text/javascript\">
						alert(\"Ocorreu um erro em reservar obra.\");
					</script>
				";	
			}
?>
