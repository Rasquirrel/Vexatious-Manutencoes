<?php

include('../banco.php');
$codcli=$_POST['codcli']; 
$nome=$_POST['nome']; 
$dat=$_POST['data']; 
$salario=$_POST['salario']; 
$sql = "update tbcli set nome='$nome', dataNasc = '$dat', salario='$salario' where codcli = '$codcli'";

$update = $conexao->query($sql);//executa a query

if ($update) {
   echo '1';
} 
else
{
   echo '0';
}

?>