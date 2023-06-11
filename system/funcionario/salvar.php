<?php
include('../banco.php');

$funcionario_nome = $_POST['funcionario_nome'];
$funcionario_email = $_POST['funcionario_email'];
$funcionario_cpf = $_POST['funcionario_cpf'];

$sql = "INSERT INTO tb_funcionarios VALUES('', '$funcionario_nome', '$funcionario_email', '$funcionario_cpf')";

$inserir = $conexao->query($sql);

if($inserir){
    echo '1';
}
else {
    echo '0';
}

?>