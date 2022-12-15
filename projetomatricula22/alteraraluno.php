<?php
include 'banco.php';
   

$id = $_POST['id'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

$sql = "update tbaluno set nome = '$nome', sexo = '$sexo', nascimento = '$nascimento' , endereco = '$endereco' ,  fone = '$fone' where codaluno = '$id'";

$update = $conexao->query($sql);
if($update==true) {
    header('Location: buscaaluno.php?update=ok');
}else{
    header('Location: buscaaluno.php?update=erro');
}

?>