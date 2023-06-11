<?php
   include('../banco.php');
   $texto=$_POST['pesquisa'];
   $sql = "SELECT computador_id, computador_nome, cliente_nome, computador_problema FROM tb_computadores inner join(tb_clientes) on(tb_computadores.computador_cliente_id = tb_clientes.cliente_id) where computador_nome like  '%".$texto."%' limit 0,30"; //gera o codigo sql.

   $sql2 = "SELECT computador_cliente_id, cliente_id as cliente_id FROM tb_computadores inner join(tb_clientes) on(tb_computadores.computador_cliente_id = tb_clientes.cliente_id) where computador_cliente_id = cliente_id limit 0,30";
	 
   $consulta = $conexao->query($sql);//executa a consulta 1

	
	if ($consulta->num_rows > 0) {
	
		while($row=$consulta->fetch_array(MYSQLI_ASSOC)){
			echo '<tr class="odd gradeX">
                  <td class="left">'.$row['computador_id'].'</td>
				  <td class="left">'.$row['computador_nome'].'</td>
				  <td class="left">'.$row['cliente_nome'].'</td>
				  <td class="left">'.$row['computador_problema'].'</td>
				  <td class="left">
				   <a href="#" id="'.$row['computador_id'].'|A" title="Alterar" class="btn btn-tbl-edit btn-danger">
					  <i class="fa fa-pencil"></i>
				    </a>
				    <a href="#" id="'.$row['computador_id'].'|E" title="Excluir" class="btn btn-tbl-delete btn-danger" >
					  <i class="fa fa-trash-o "></i>
				    </a>
			     </td>
				 </tr>';			
			
		}
		
	}else{ 
			echo "0";
	}




?>