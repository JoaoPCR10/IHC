<?php
	include_once("conexao.php");
        
	$id_obra = intval($_POST['idObra']);
    $id_aluno = intval($_POST['idAluno']);
    $dataEmprestimo = $_POST['data'];
    
    $dataDevolucao = date('Y/m/d', strtotime("+2 weeks",strtotime($dataEmprestimo)));
    
	$result_emprestimo = "INSERT INTO `emprestimo`(`idobra`, `idaluno`, `dataemprestimo`, `datadevolucao`, `devolvido`) VALUES  ('$id_obra','$id_aluno','$dataEmprestimo','$dataDevolucao','0')";
	$resultado_emprestimo = mysqli_query($conn, $result_emprestimo);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/emprestimo.php'>
					<script type=\"text/javascript\">
						alert(\"Emprestimo cadastrado com Sucesso.\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/emprestimo.php'>
					<script type=\"text/javascript\">
						alert(\"O emprestimo não foi cadastrado com Sucesso.\");
					</script>
				";	
			}
?>
