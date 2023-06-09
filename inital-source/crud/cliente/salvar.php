<?php

include('../banco.php');

$nome=$_POST['nome']; 
$dat=$_POST['data']; 
$salario=$_POST['salario']; 


// ajustando os caracteres do salario
$salario = str_replace('.', "", $salario);
$salario = str_replace(',', ".", $salario);

$sql = "insert into tbcli (codcli, nome, salario, dataNasc) 
         values (null,'$nome','$salario','$dat')";

    $inserir = $conexao->query($sql); //executa a inser褯
	if ($inserir) {
			echo '1';
		} 
 	else {
			echo '0';
		}
 

?>