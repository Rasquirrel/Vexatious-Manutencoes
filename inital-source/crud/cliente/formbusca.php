<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LABORATORIO DE SOFTWARE</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../index.php">inicio</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="formbusca.php">Cadastro</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Relatórios</a>
                    
                    
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
                    
                    <h3 class="mt-4">	CADASTRO DE CLIENTES	</h3>
                 
                  
						
						 <div class="card card-header">
                            <form id="formbusca" class="form-horizontal" method="POST" action="javascript:" >
													<DIV class="row">
                                                          
												         	<div class="col-md-6">
                                                                <input id="texto" type="text" placeholder="Texto da pesquisa" style="background:#fcfce3"class="form-control" required="required" >
                                                               
                                                            </div>
                                                            <div class="col-md-2">
                                                            <span class="input-group-btn"><button class="btn btn-primary" type="submit" id="btnbuscar">
                                                                    <i class='fa fa-search'></i>&nbsp;Buscar</span>
                                                           </div>
                                                           <div class="col-md-4">
													        <a href="formincluir.php" class="btn btn-success " ><i class='fa fa-plus'></i>&nbsp;Novo Cadastro</a>
                                                           </div>
                                                           
                                                          
                                                        </DIV>	  
														 
												
										</form>
                           </div>
                          
      
                    
                    <div class="card card-header border-2">
                      
                      <table class="table table-stripped table-hover">
                         <thead class="bg-info">
                             <TD>Nome</TD>
                             <TD>Nascimento</TD>
                             <TD>Salário</TD>
                             <TD>Ações</TD>
                         </thead> 
                         <tbody id="corpo_tabela">
                         

                         </tbody>

                      </table>

                 
                 </div>

                <!-- FIM TELAS -->
                </div>

            </div>
        </div>
<!--MONTANDO MODAIS -->

<!-- ################  MODAL ALTERAR ############## -->
<div class="modal" id="Alterar" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">ALTERAÇÃO DO CADASTRO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--RODAPE MODAL-->
      <div class="modal-body">
           <form action="" method="post">
                <div class="card card-body" id="corpoModalEdita">
                                    
                </div>
          </form>
      </div>
     
     <!--R0DAPE MODAL-->
         <div class="modal-footer ">
        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" id="gravaAlteracao" class="btn btn-primary">Gravar Alterações</button>
      </div>
    </div>
  </div>
</div>

<!-- ################  MODAL MENSAGEM ############## -->
    <div class="modal fade" id="modalAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		    <div class="modal-dialog" role="document">
			        <div class="modal-content">
					            <div class="modal-header">
					                <h6 class="modal-title" id="exampleModalLabel">PROCESSANDO DADOS</h6>
					                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                    <span aria-hidden="true">&times;</span>
					                </button>
				                </div>
                          <!--RODAPE MODAL-->
					            <div class="modal-body">
                                    <center> <img src="../img/aguard.gif">       
									<p align="center" id="message">Aguarde...</p><br>
                                    </center>        
					            </div>
					            
			  </div>
	     </div>
      </div>


    
<!--  ##############  FIM MODAIS ###########-->
        
        <!-- incluindo biliotecas do template  -->
        <script src="../js/jquery3.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/sweetalert.js"></script> 

        

        <script>
           $(document).ready(function() {
           
            //*******  fazendo a pesquisa  ***********
            $('#btnbuscar').click(function(){
            let texto = $("#texto").val();
	        	
             $('#modalAlert').modal('show')
                    $.post('busca.php', {pesquisa: texto}, function(resposta) {
                        //$(".modal").modal('hide');
                        if(resposta!='0'){
                          $('#corpo_tabela').html(resposta);    
                          setTimeout(function(){$('#modalAlert').modal('hide')}, 1000);
                         }
                        else {
                        swal('Sem dados para pesquisa',{icon:error})
                        }
         
         })// fim post
         
   }) // fim click

   //*******  fazendo a alterar e exclui  ***********
   $('#corpo_tabela').on('click','a', function(){
      var vetor = $(this).attr("id");
     var elemento = vetor.split("|");
     let id = elemento[0] ;
     let letra = elemento[1] ;

    if(letra=='A')   {      
        //executa codigo ao chamar modal
         $('#Alterar').on('shown.bs.modal', function() {
            $.post('montaModal.php',{codcli:id},function(resposta){
               $('#corpoModalEdita').html(resposta);
            }); // FIM POST 
         });
         $('#Alterar').modal('show'); // chama o modal

     } // fim alterar

    if(letra=='E')   {
        swal({
                        title: "EXCLUIR",
                        text: "Deseja realmente EXCLUIR esse registro?",
                        icon: "info",   buttons: ["Não", "Sim"],   dangerMode: true,
                        }).then((willDelete) => {
                        if (willDelete){
                                $.post('excluir.php',{codcli:id},function(resposta){
                                if(resposta =='1'){
                                    swal('Registro excluído com sucesso',{icon:success})
                                    $("#btnbuscar").click();
                                    //window.location.reload();
                                }else{
                                    swal('Algo deu errado',{icon:danger})
                                }
                                }) // fim post

                        }
                      });// fim mensagem swall
    } // fim excluir


   }) // fim ON tabela


  // clicando no salvar dentro do MODAL 
   $('#gravaAlteracao').click(function(){
              // VARIAVEIS DENTRO DO MODAL ALTERAR
             
             let idalt=$('#idalt').val();
              let nomealt=$('#nomealt').val();
              let salarioalt=$('#salarioalt').val();
              let datalt=$('#datalt').val();
              
              $.post('update.php', {codcli:idalt,nome:nomealt,salario:salarioalt,data:datalt}, function(resposta) {
               
                if (resposta=='1'){
                    swal("Registro allterado!", {	icon: "success",	});
                     $('#Alterar').modal('hide');
                 }else{
                    swal("Erro ao ALTERAR!", {	icon: "danger",});
                 }    
             })// fim do post
             
     })// fim gravar

  
           
          
           

                
  }) // FIM DOM
        </script>
         
    </body>
</html>
