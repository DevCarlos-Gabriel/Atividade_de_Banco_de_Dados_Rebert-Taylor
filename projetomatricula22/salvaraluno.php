<?php
include 'banco.php';

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

$sql = "insert into tbaluno(codaluno, nome, sexo, nascimento, endereco, fone )
                        values(null, '$nome', '$sexo', '$nascimento', '$endereco', '$fone')";

$insert = $conexao->query($sql);
if($insert==true) {
    header('Location: frmcadaluno.php?insert=ok');
}else{
    header('Location: frmcadaluno.php?insert=erro');
}

?>