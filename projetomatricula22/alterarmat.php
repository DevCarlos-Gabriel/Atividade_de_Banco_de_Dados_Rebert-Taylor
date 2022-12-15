<?php
include 'banco.php';

$id = $_POST['id'];
$aluno = $_POST['aluno'];
$curso = $_POST['curso'];
$usuario = $_POST['email'];
$data = $_POST['data'];
$hora = $_POST['hora'];



$sql = "update tbmatriculas set codaluno='$aluno', codusu = '$usuario', codcurso='$curso', data='$data', hora='$hora' where codmat = '$id'";

$update = $conexao->query($sql);
if($update==true) {
    header('Location: buscamat.php?update=ok');
}else{
    header('Location: buscamat.php?update=erro');
}

?>