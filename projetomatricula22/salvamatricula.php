<?php
include 'banco.php';

$id = $_POST['id'];
$aluno = $_POST['aluno'];
$curso = $_POST['curso'];
$data = $_POST['data'];
$hora = $_POST['hora'];


$sql = "insert into tbmatriculas(codmat, codaluno, codcurso, codusu, data, hora )
                        values(null, '$aluno', '$curso','1', '$data', '$hora')";

$insert = $conexao->query($sql);
if($insert==true) {
    header('Location: frmcadmat.php?insert=ok');
}else{
    header('Location: frmcadmat.php?insert=erro');
}

?>