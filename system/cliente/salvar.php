<?php
include('../banco.php');

$cliente_nome = $_POST['cliente_nome'];
$cliente_nascimento = $_POST['cliente_nascimento'];
$cliente_telefone = $_POST['cliente_telefone'];
$cliente_endereco = $_POST['cliente_endereco'];

$sql = "INSERT INTO tb_clientes VALUES('', '$cliente_nome', '$cliente_nascimento', '$cliente_telefone', '$cliente_endereco')";

$inserir = $conexao->query($sql);

if($inserir){
    echo '1';
}
else {
    echo '0';
}

?>