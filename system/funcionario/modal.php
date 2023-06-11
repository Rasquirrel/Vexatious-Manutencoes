<?php
   include('../banco.php');
   $funcionario_id=$_POST['funcionario_id'];
   $sql = "select * from tb_funcionarios where funcionario_id = '$funcionario_id'"; 
	 
   $consulta = $conexao->query($sql);//executa a consulta
	
	if ($consulta->num_rows > 0) {
	
		while($row=$consulta->fetch_array(MYSQLI_ASSOC)){
			echo '
               <div class="card-body pt-0">
               <form class="card py-4 my-4" method="POST" action="javascript:func()">
                  <div class="row">
                        <label class="col-sm-3 form-label">ID</label>
                        <div class="col-sm-9">
                           <input class="form-control" style="background-color: #2D3035; color: #8A8D93;" type="text" readonly id="funcionario_id" value="'.$row['funcionario_id'].'">
                        </div>
                  </div>
                  <div class="my-4"></div>
                  <div class="row">
                     <label class="col-sm-3 form-label">Nome</label>
                     <div class="col-sm-9">
                        <input class="form-control" type="text" required id="funcionario_nome" value="'.$row['funcionario_nome'].'">
                     </div>
                  </div>
                  
                  <div class="my-4"></div>
                  <div class="row">
                     <label class="col-sm-3 form-label">E-Mail</label>
                     <div class="col-sm-9">
                     <input class="form-control" type="email" required id="funcionario_email" value="'.$row['funcionario_email'].'">
                     </div>
                  </div>


                  <div class="my-4"></div>
                  <div class="row">
                     <label class="col-sm-3 form-label">CPF</label>
                     <div class="col-sm-9">
                     <input class="form-control" type="text" required id="funcionario_cpf" value="'.$row['funcionario_cpf'].'">
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