<?php
include('../banco.php');

$computador_nome = $_POST['computador_nome'];
$cliente_id = $_POST['cliente_id'];
$computador_problema = $_POST['computador_problema'];

$sql = "INSERT INTO tb_computadores VALUES('', '$computador_nome', '$cliente_id', '$computador_problema')";

$inserir = $conexao->query($sql);

if($inserir){
    echo '1';
}
else {
    echo '0';
}

?>