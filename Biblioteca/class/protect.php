<?php
include('class/conexao.php');
if(!function_exists("protect")){

  function protect(){
      
      if(!isset($_SESSION))
          session_start();
      
      if(!isset($_SESSION[usuario_logado]) || !is_numeric($_SESSION['usuario'])){
          header("Location: login.php");


    }

  }

}
protect();
?>