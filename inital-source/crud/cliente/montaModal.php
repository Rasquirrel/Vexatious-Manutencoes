<?php
   include('../banco.php');
   $codcli=$_POST['codcli'];
   $sql = "select * from tbcli where codcli = '$codcli'"; 
	 
   $consulta = $conexao->query($sql);//executa a consulta
	
	if ($consulta->num_rows > 0) {
	
		while($row=$consulta->fetch_array(MYSQLI_ASSOC)){
			echo '
            <form class="card card-body" method="POST" action="javascript:func()">
            <!--LINHA 1-->	
             <div class="row">
               <div class="form-group col-md-2">
                        <label> COD</label>	
                        <input type="text" id="idalt" value="'.$row['codcli'].'" class="form-control" disabled>
                 </div>

                <div class="form-group col-md-7">
                        <label> Nome</label>	
                        <input type="text" id="nomealt" value="'.$row['nome'].'" class="form-control" >
                 </div>
                 
                  <div class="form-group col-md-3">
                        <label> NASCIMENTO</label>	
                        <input type="date" id="datalt" value="'.$row['dataNasc'].'" class="form-control" >
                 </div>
              </div>
               
               <!--LINHA 2-->	
             <div class="row">
                <div class="form-group col-md-3">
                        <label> Salário</label>	
                        <input type="text" id="salarioalt" value="'.$row['salario'].'" class="form-control" >
                 </div>
                 
              </div>

               
            </form>
            ';			
			
		}
		
	}else{ 
			echo "0";
	}




?>