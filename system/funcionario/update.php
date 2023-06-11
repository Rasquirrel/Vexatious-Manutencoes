<?php
include('../banco.php');
$funcionario_id = $_POST['funcionario_id'];
$funcionario_nome = $_POST['funcionario_nome'];
$funcionario_email = $_POST['funcionario_email'];
$funcionario_cpf = $_POST['funcionario_cpf'];

$sql = "update tb_funcionarios set funcionario_nome = '$funcionario_nome', funcionario_email = '$funcionario_email', funcionario_cpf = '$funcionario_cpf' where funcionario_id = '$funcionario_id'";

$update = $conexao->query($sql);

if ($update){
    echo '1';
} else {
    echo '0';
}

?>