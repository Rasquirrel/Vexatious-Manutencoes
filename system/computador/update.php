<?php
include('../banco.php');
$computador_id = $_POST['computador_id'];
$computador_nome = $_POST['computador_nome'];
$cliente_id = $_POST['cliente_id'];
$computador_problema = $_POST['computador_problema'];

$sql = "update tb_computadores set computador_id='$computador_id', computador_nome = '$computador_nome', cliente_id = '$cliente_id', computador_problema = '$computador_problema' where computador_id = '$computador_id'";

$update = $conexao->query($sql);

if ($update){
    echo '1';
} else {
    echo '0';
}

?>