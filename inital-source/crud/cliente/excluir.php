<?php

include('../banco.php');

$codcli=$_POST['codcli']; 

$sql = "delete from tbcli where codcli = '$codcli'"; 
      

    $excluir = $conexao->query($sql); //executa a inser褯
	if ($excluir) {
			echo '1';
		} 
 	else {
			echo '0';
		}
 

?>