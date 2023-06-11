<?php
   include('../banco.php');
   $cliente_id=$_POST['cliente_id'];
   $sql = "select * from tb_clientes where cliente_id = '$cliente_id'"; 
	 
   $consulta = $conexao->query($sql);//executa a consulta
	
	if ($consulta->num_rows > 0) {
	
		while($row=$consulta->fetch_array(MYSQLI_ASSOC)){
			echo '
               <div class="card-body pt-0">
               <form class="card py-4 my-4" method="POST" action="javascript:func()">
                  <div class="row">
                        <label class="col-sm-3 form-label">ID</label>
                        <div class="col-sm-9">
                           <input class="form-control" style="background-color: #2D3035; color: #8A8D93;" type="text" readonly id="cliente_id" value="'.$row['cliente_id'].'">
                        </div>
                  </div>
                  <div class="my-4"></div>
                  <div class="row">
                     <label class="col-sm-3 form-label">Nome</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" required id="cliente_nome" value="'.$row['cliente_nome'].'">
                     </div>
                  </div>
                  
                  <div class="my-4"></div>
                  <div class="row">
                     <label class="col-sm-3 form-label">Data de Nascimento</label>
                     <div class="col-sm-9">
                     <input class="form-control" type="date" required id="cliente_nascimento" value="'.$row['cliente_nascimento'].'">
                     </div>
                  </div>

                  <div class="my-4"></div>
                  <div class="row">
                     <label class="col-sm-3 form-label">Telefone</label>
                     <div class="col-sm-9">
                     <input class="form-control" type="text" required id="cliente_telefone" value="'.$row['cliente_telefone'].'">
                     </div>
                  </div>

                  <div class="my-4"></div>
                  <div class="row">
                     <label class="col-sm-3 form-label">Endereço</label>
                     <div class="col-sm-9">
                     <input class="form-control" type="text" required id="cliente_endereco" value="'.$row['cliente_endereco'].'">
                     </div>
                  </div>

               </form>
               </div>
            ';			
			
		}
		
	}else{ 
			echo "0";
	}




?>