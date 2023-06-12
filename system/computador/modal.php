<?php
   include('../banco.php');
   $computador_id=$_POST['computador_id'];

   $sql = "select tb_computadores.*, tb_clientes.cliente_nome as cliente_nome, tb_clientes.cliente_id as cliente_id from tb_computadores inner join(tb_clientes) on(tb_computadores.computador_cliente_id = tb_clientes.cliente_id) where computador_id = '$computador_id'"; 

   $sql2 = "select * from tb_clientes";

   $consulta_tbclientes = $conexao->query($sql2);

   $consulta = $conexao->query($sql);//executa a consulta
	
	if ($consulta->num_rows > 0) {
	
		while($row=$consulta->fetch_array(MYSQLI_ASSOC)){
			echo '
               <div class="card-body pt-0">
               <form class="card py-4 my-4" method="POST" action="javascript:func()">
                  <div class="row">
                        <label class="col-sm-3 form-label">ID</label>
                        <div class="col-sm-9">
                           <input class="form-control" style="background-color: #2D3035; color: #8A8D93;" type="text" readonly id="computador_id" value="'.$row['computador_id'].'">
                        </div>
                  </div>
                  <div class="my-4"></div>
                  <div class="row">
                     <label class="col-sm-3 form-label">Nome</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" required id="computador_nome" value="'.$row['computador_nome'].'">
                     </div>
                  </div>
                  
                  <div class="my-4"></div>
                  <div class="row">
                     <label class="col-sm-3 form-label">Cliente ID</label>
                     <div class="col-sm-9">
                     <select class="form-select" id="cliente_id" style="background-color: #2D3035; color: #8A8D93;">;';

                     if($consulta_tbclientes->num_rows > 0){
                        while($row2=$consulta_tbclientes->fetch_array(MYSQLI_ASSOC)){
                           echo '
                               <option value="'.$row2['cliente_id'].'">'.$row2['cliente_id'].'</option>
                              ';
                        }
                     } else {
                        echo '<option value="">/NADA</option>';
                     }
                     
                     echo '
                     </select>
                     </div>
                  </div>


                  <div class="my-4"></div>
                  <div class="row">
                     <label class="col-sm-3 form-label">Cliente</label>
                     <div class="col-sm-9">
                     <select class="form-select" id="cliente_nome_select">
                        <option value="'.$row['cliente_nome'].'">'.$row['cliente_nome'].'</option>
                     ';

                     if($consulta_tbclientes->num_rows > 0){
                        while($row2=$consulta_tbclientes->fetch_array(MYSQLI_ASSOC)){
                           echo '
                               <option value="'.$row2['cliente_nome'].'">'.$row2['cliente_nome'].'</option>
                              ';
                        }
                     } else {
                        echo '<option value="">/NADA</option>';
                     }
   
                    echo '
                    </select>
                    </div>
                  </div>

                  <div class="my-4"></div>
                  <div class="row">
                     <label class="col-sm-3 form-label">Problema</label>
                     <div class="col-sm-9">
                     <textarea class="form-control" rows="4" cols="40" id="computador_problema">'.$row['computador_problema'].'</textarea>
                     </div>
                  </div>

               </form>
               </div>
            ';			
			
		}
		
	}else{ 
			echo '0';
	}



?>