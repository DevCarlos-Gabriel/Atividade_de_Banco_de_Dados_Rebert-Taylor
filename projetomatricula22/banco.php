<?php
$conexao = new mysqli("localhost", "root", "", "dbmatricula");

   if (mysqli_connect_errno()){
      trigger_error(mysqli_connect_error());
      echo mysqli_connect_error();
   }

?>