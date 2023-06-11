<?php

include('../banco.php');

$funcionario_id = $_POST['funcionario_id'];

$sql = "delete from tb_funcionarios where funcionario_id = '$funcionario_id'";

$excluir = $conexao->query($sql);

if($excluir) {
    echo '1';
}
else {
    echo '0';
}


?>