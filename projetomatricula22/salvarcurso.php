<?php
include 'banco.php';

$nome = $_POST['nome'];
$turno = $_POST['turno'];
$cargahoraria = $_POST['cargahoraria'];

$sql = "insert into tbcursos(codcurso, nome, turno, cargahoraria )
                        values(null, '$nome', '$turno', '$cargahoraria')";

$insert = $conexao->query($sql);
if($insert==true) {
    header('Location: frmcadcursos.php?insert=ok');
}else{
    header('Location: frmcadcursos.php?insert=erro');
}

?>