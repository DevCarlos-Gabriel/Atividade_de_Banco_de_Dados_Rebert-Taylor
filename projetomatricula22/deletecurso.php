<?php
include 'banco.php';

   $id = $_GET['id'];

   $sql = "delete from tbcursos where codcurso = '$id'";

   $consulta = $conexao->query($sql);
   if($consulta){
    header('Location: buscacurso.php?delete=ok');
   }else{
    header('Location: buscacurso.php?delete=erro');
   }

?>