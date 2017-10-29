<?php
	include_once("conexao.php");

    date_default_timezone_set('UTC');
        
	$id_emprestimo = intval($_GET['id']);
    echo $id_emprestimo;
    $dataEmprestimo = date('Y-m-d');//Data do dia de hoje
    
    $dataDevolucao = date('Y/m/d', strtotime("+2 weeks",strtotime($dataEmprestimo)));
    echo $dataEmprestimo ;
    echo $dataDevolucao;

	$result_emprestimo = "UPDATE `emprestimo` SET `dataemprestimo`='$dataEmprestimo', `datadevolucao`='$dataDevolucao') WHERE id='$id_emprestimo'";
	$resultado_emprestimo = mysqli_query($conn, $result_emprestimo);
	
	if(mysqli_affected_rows($conn) != 0){
				echo "
					META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/emprestimo.php'>
					<script type=\"text/javascript\">
						alert(\"Emprestimo renovado por mais 2 semanas.\");
					</script>
				";	
			}else{
				echo "
					META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Biblioteca/emprestimo.php'>
					<script type=\"text/javascript\">
						alert(\"O emprestimo não foi renovado com Sucesso.\");
					</script>
				";	
			}
?>
