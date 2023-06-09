<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LABORATORIO DE SOFTWARE</title>
        <!-- Favicon-->
        <link rel="icon" type="../image/x-icon" href="assets/favicon.ico" />
        
        <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">

                <div class="sidebar-heading border-bottom bg-dark text-white">JQUERY</div>
                <div class="list-group list-group-flush ">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">inicio</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="frombusca.php">Cadastro</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#">Relatórios</a>
                    
                    
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">SAIR</a></li>
                                
                            </ul>

                        </div>
                </nav>

                <!-- PAGINA PRINCIPAL-->
                <div class="container-fluid">
                    <!-- MONTE SUAS TELAS AQUI-->
                    <h3 class="mt-4">	CADASTRO DE CLIENTES	</h3>
                    
                    <nav class="navbar navbar-light bg-light">
                        <form class="card card-body" method="POST" action="javascript:func()">
						<!--LINHA 1-->	
						 <div class="row">
                            <div class="form-group col-md-7">
                                    <label> Nome</label>	
                                    <input type="text" id="nome" class="form-control" >
                             </div>
							 
							  <div class="form-group col-md-3">
                                    <label> NASCIMENTO</label>	
                                    <input type="date" id="data" class="form-control" >
                             </div>
						  </div>
						   
						   <!--LINHA 2-->	
						 <div class="row">
                            <div class="form-group col-md-3">
                                    <label> Salário</label>	
                                    <input type="text" id="salario" class="form-control" >
                             </div>
							 
						  </div>

                           <!--LINHA 4-->	
						 <div class="row">
						    	  <div class=" col-md-2 mt-2"> 
									<button id="gravar" class="btn btn-info "><i class="fa fa-save "></i>&nbsp;GRAVAR</button>
                                   </div>

                                   <div class=" col-md-2 mt-2"> 
									<a href="formbusca.php" class="btn btn-warning"><i class="fa fa-undo "></i>&nbsp;Retornar</a>
                                   </div> 
                            </div>
                        </form>
                    
                    </nav>


                <!-- FIM TELAS -->
                </div>

            </div>
        </div>


        
        <!-- Core theme JS-->
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/jquery3.js"></script>
        <script src="../mascaras/jquery.maskMoney.js" type="text/javascript"></script>
        <script src="../mascaras/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="../js/sweetalert.js"></script> 
      
       
        
   <script>
    
    $(function(){
        $("#salario").maskMoney({thousands:'.', decimal:','})

        $('#gravar').click(function(){
           
              let nome=$('#nome').val();
              let salario=$('#salario').val();
              let data=$('#data').val();

              
           $.post('salvar.php', {nome:nome,salario:salario,data:data}, function(resposta) {
             let resp = parseInt(resposta);
            if (resp==1)
              {
                setTimeout(function(){$('#modalAlert').modal('hide')}, 1000);
                $(location).attr('href',"formbusca.php");
              }
              else {
                alert('Algo deu errado')
              }
              
            })// fim do post
        })// fim gravar
      
    })// fim jquery

    </script> 
         
    </body>
</html>
