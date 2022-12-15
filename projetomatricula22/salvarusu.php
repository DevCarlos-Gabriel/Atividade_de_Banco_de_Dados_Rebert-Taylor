<?php
include 'banco.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$sql = "insert into tbusu(codusu, nome, email, senha )
                        values(null, '$nome', '$email', '$senha')";

$insert = $conexao->query($sql);
if($insert==true) {
    header('Location: frmcadusu.php?insert=ok');
}else{
    header('Location: frmcadusu.php?insert=erro');
}

?>