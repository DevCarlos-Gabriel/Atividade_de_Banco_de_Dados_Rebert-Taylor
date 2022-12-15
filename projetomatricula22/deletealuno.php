<?php
include 'banco.php';

   $id = $_GET['id'];

   $sql = "delete from tbaluno where codaluno = '$id'";

   $consulta = $conexao->query($sql);
   if($consulta){
    header('Location: buscaaluno.php?delete=ok');
   }else{
    header('Location: buscaaluno.php?delete=erro');
   }

?>