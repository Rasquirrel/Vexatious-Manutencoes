<?php

include('../banco.php');

$cliente_id = $_POST['codcli'];

$sql = "delete from tb_clientes where cliente_id = '$cliente_id'";

$excluir = $conexao->query($sql);

if($excluir) {
    echo '1';
}
else {
    echo '0';
}


?>