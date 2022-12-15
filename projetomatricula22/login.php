<?php
   include 'banco.php';

   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $sql = " select * from tbusu where email = '$email' and senha = '$senha' ";

      // executa comandos SQL
   $consulta = $conexao->query($sql);

      // Testa para ver se o comando deu certo
   if($consulta) {
      // Verificando se existe usuário
      if($consulta->num_rows > 0){
         session_start();
         $_SESSION['login'] = 'OK!';
         // Redirecionando
         header('Location: principal.php');
         // echo 'Usuario encontrado';
      }else{

         // Redirecionando
         header('Location: index.php?login=erro');
         // echo 'Usuario não encontrado';
   }
}
// echo 'ghg';
?>