<?php
include 'banco.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$cargahoraria = $_POST['cargahoraria'];


$sql = "update tbcursos set nome = '$nome', turno = '$turno' , cargahoraria = '$cargahoraria' where codcurso = '$id'";

$update = $conexao->query($sql);
if($update==true) {
    header('Location: buscacurso.php?update=ok');
}else{
    header('Location: buscacurso.php?update=erro');
}

?>