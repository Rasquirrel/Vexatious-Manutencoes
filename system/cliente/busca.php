<?php
   include('../banco.php');
   $texto=$_POST['pesquisa'];
   $sql = "select * from tb_clientes where cliente_nome like  '%".$texto."%' limit 0,30"; //gera o codigo sql.
	 
   $consulta = $conexao->query($sql);//executa a consulta
	
	if ($consulta->num_rows > 0) {
	
		while($row=$consulta->fetch_array(MYSQLI_ASSOC)){
			echo '<tr class="odd gradeX">
                  <td class="left">'.$row['cliente_id'].'</td>
				  <td class="left">'.$row['cliente_nome'].'</td>
				  <td class="left">'.$row['cliente_nascimento'].'</td>
				  <td class="left">'.$row['cliente_telefone'].'</td>
				  <td class="left">'.$row['cliente_endereco'].'</td>
				  <td class="left">
				   <a href="#" id="'.$row['cliente_id'].'|A" title="Alterar" class="btn btn-tbl-edit btn-danger">
					  <i class="fa fa-pencil"></i>
				    </a>
				    <a href="#" id="'.$row['cliente_id'].'|E" title="Excluir" class="btn btn-tbl-delete btn-danger" >
					  <i class="fa fa-trash-o "></i>
				    </a>
			     </td>
				 </tr>';			
			
		}
		
	}else{ 
			echo "0";
	}




?>