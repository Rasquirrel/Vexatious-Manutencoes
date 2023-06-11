<?php

include('../banco.php');

$computador_id = $_POST['computador_id'];

$sql = "delete from tb_computadores where computador_id = '$computador_id'";

$excluir = $conexao->query($sql);

if($excluir) {
    echo '1';
}
else {
    echo '0';
}


?>