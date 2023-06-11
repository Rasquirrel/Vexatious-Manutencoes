<?php
include('../banco.php');
$cliente_id = $_POST['cliente_id'];
$cliente_nome = $_POST['cliente_nome'];
$cliente_nascimento = $_POST['cliente_nascimento'];
$cliente_telefone = $_POST['cliente_telefone'];
$cliente_endereco = $_POST['cliente_endereco'];

$sql = "update tb_clientes set cliente_nome = '$cliente_nome', cliente_nascimento = '$cliente_nascimento', cliente_telefone = '$cliente_telefone', cliente_endereco = '$cliente_endereco' where cliente_id = '$cliente_id'";

$update = $conexao->query($sql);

if ($update){
    echo '1';
} else {
    echo '0';
}

?>