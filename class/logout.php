<?php
include("class/conexao.php");
    if(!isset($_SESSION))
        session_start();

unset($_SESSION[usuario_logado]);
session_destroy();
echo "<script>location.href='index.php';</script>";
exit('Redirecionando...');
?>
