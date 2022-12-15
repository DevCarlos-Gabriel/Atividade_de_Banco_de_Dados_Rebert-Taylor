<?php
include 'banco.php';

   $id = $_GET['id'];

   $sql = "delete from tbusu where codusu = '$id'";

   $consulta = $conexao->query($sql);
   if($consulta){
    header('Location: buscausu.php?delete=ok');
   }else{
    header('Location: buscausu.php?delete=erro');
   }

?>