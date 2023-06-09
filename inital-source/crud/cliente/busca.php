<?php
   include('../banco.php');
   $texto=$_POST['pesquisa'];
   $sql = "select * from tbcli where nome like  '%".$texto."%' limit 0,30"; //gera o codigo sql.
	 
   $consulta = $conexao->query($sql);//executa a consulta
	
	if ($consulta->num_rows > 0) {
	
		while($row=$consulta->fetch_array(MYSQLI_ASSOC)){
			echo '<tr class="odd gradeX">
                  <td class="left">'.$row['nome'].'</td>
				  <td class="left">'.$row['dataNasc'].'</td>
				  <td class="left">'.$row['salario'].'</td>
				  <td class="left">
				   <a href="#" id="'.$row['codcli'].'|A" title="Alterar" class="btn btn-tbl-edit btn-sm bg-info">
					  <i class="fa fa-pencil"></i>
				    </a>
				    <a href="#" id="'.$row['codcli'].'|E" title="Excluir" class="btn btn-tbl-delete btn-sm bg-warning" >
					  <i class="fa fa-trash-o "></i>
				    </a>
			     </td>
				 </tr>';			
			
		}
		
	}else{ 
			echo "0";
	}




?>