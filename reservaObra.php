<?php
	include_once("conexao.php");
    if(!isset($_SESSION))
        session_start();
    
	$id_obra = intval($_GET['id']);
    $id_aluno = intval($_SESSION['usuario_logado']);
    $dataEmprestimo = $_POST['data'];
    
    $dataDevolucao = date('Y/m/d', strtotime("+2 weeks",strtotime($dataEmprestimo)));
    
	$result_emprestimo = "INSERT INTO `reserva`(`id_aluno`, `id_obra`, `data`, `emprestado`) VALUES  ('$id_aluno','$id_obra','$data','0')";
	$resultado_emprestimo = mysqli_query($conn, $result_emprestimo);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/emprestimo.php'>
					<script type=\"text/javascript\">
						alert(\"Emprestimo cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/emprestimo.php'>
					<script type=\"text/javascript\">
						alert(\"O emprestimo não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>
