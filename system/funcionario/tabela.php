<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Choices.js-->
    <link rel="stylesheet" href="../../vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../../img/favicon.ico">
    <!-- Font Awesome - ISAC-->
    <script src="https://kit.fontawesome.com/9b79b096e6.js" crossorigin="anonymous"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn d-flex align-items-center position-absolute top-0 end-0 me-4 mt-2 cursor-pointer"><span>Close </span>
                  <svg class="svg-icon svg-icon-md svg-icon-heavy text-gray-700 mt-1">
                    <use xlink:href="#close-1"> </use>
                  </svg>
            </div>
            
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between py-1">
          <div class="navbar-header d-flex align-items-center"><a class="navbar-brand text-uppercase text-reset" href="index.html">
              <div class="brand-text brand-big"><strong class="text-primary">Vexatious</strong><strong>Manutenções</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">V</strong><strong>M</strong></div></a>
            <button class="sidebar-toggle">
                  <svg class="svg-icon svg-icon-sm svg-icon-heavy transform-none">
                    <use xlink:href="#arrow-left-1"> </use>
                  </svg>
            </button>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center p-1">          
        </div><span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Main</span>
        <ul class="list-unstyled">
              <li class="sidebar-item"><a class="sidebar-link" href="../../index.html"> 
                      <span><i class="fa-solid fa-house"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Início </span></a></li>
              <li class="sidebar-item active"><a class="sidebar-link" href="#"> 
                      <span><i class="fa-solid fa-briefcase"></i>&nbsp;&nbsp;&nbsp;&nbsp;Funcionários </span></a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="../cliente/tabela.php"> 
                      <span><i class="fa-solid fa-person fa-xl"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Clientes</span></a></li>

              <li class="sidebar-item"><a class="sidebar-link" href="charts.html"> 
                      <span><i class="fa-solid fa-computer"></i>&nbsp;&nbsp;&nbsp;&nbsp;Computadores </span></a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="forms.html"> 
                      <span><i class="fa-solid fa-comment"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pedidos </span></a></li>
            
              <li class="sidebar-item"><a class="sidebar-link" href="login.html"> 
                      <span><i class="fa-solid fa-door-open"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sair </span></a></li>
        </ul>
      </nav>
      <div class="page-content">
            <!-- Page Header-->
            <div class="bg-dash-dark-2 py-4">
              <div class="container-fluid">
                <h2 class="h5 mb-0">Funcionários</h2>
              </div>
            </div>
            <div class="section">
              <div class="container-fluid">

                <div class="row">
                  <div class="col-12">
                    <div class="card my-4 py-4">
                      <div class="card-header">
        
                        <form id="formbusca" action="javascript:" method="POST" class="card-tools" >
                          <div class="input-group input-group-sm col-12">
                            <input type="text" id="texto" class="form-control float-right" placeholder="Buscar">
        
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-default" id="btnbuscar">
                                <i class="fas fa-search"></i>&nbsp;&nbsp;
                              </button>
                              <a class="btn btn-default" href="formadicionar.php"><i class="fa-solid fa-plus"></i></a>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Nome</th>
                              <th>E-Mail</th>
                              <th>CPF</th>
                              <th>Opções</th>
                            </tr>
                          </thead>
                          <tbody id="corpo_tabela">
                            
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
              </div>
            </div>
        
        
        <!-- Page Footer-->
        <footer class="position-absolute bottom-0 bg-dash-dark-2 text-white text-center py-3 w-100 text-xs" id="footer">
          <div class="container-fluid text-center">
            <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            <p class="mb-0 text-dash-gray">2021 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.</p>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../vendor/just-validate/js/just-validate.min.js"></script>
    <script src="../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../vendor/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="../../js/charts-home.js"></script>
    <!-- Main File-->
    <script src="../../js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">




    <!--MODAIS-->
    <div class="modal" id="Alterar" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <!--CABEÇALHO MODAL-->
          <div class="modal-header bg-default">
            <h5 class="modal-title">Alteração do cadastro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--CORPO MODAL-->
          <div class="modal-body">
              
              <div class="card" id="corpoModalEdita">
                
              </div>
          </div>
         
         <!--RODAPE MODAL-->
             <div class="modal-footer ">
            <button type="button"  class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" id="gravaAlteracao" class="btn btn-primary">Gravar Alterações</button>
          </div>
        </div>
      </div>
    </div>


    <!-- CODIGO JQUERY USADO PELO ISAC-->
    <script src="../../js/jquery3.js"></script>
    <!--input mask -->
    <script src="../../js/inputmask.js"></script>
    <script src="../../js/jquery.inputmask.js"></script>
    <script src="../../js/jquery.inputmask.min.js"></script>
    <!-- Codigo do SweetAlert-->
    <script src="../../js/sweetalert.js"></script>
    <script>
      $(document).ready(function(){
        

        // Começo da função de pesquisar
        $('#btnbuscar').click(function(){
          let texto = $('#texto').val()
          $.post('busca.php', {pesquisa: texto}, function(resposta) {
            if(resposta!='0'){
              $('#corpo_tabela').html(resposta);
            }
            else {
              swal('Nao tem nada para mostrar!', {icon: error})
            }
          })
        })

        // Começo da função de alterar e excluir
        $('#corpo_tabela').on('click', 'a', function() {
          var vetor = $(this).attr("id")
          var elemento = vetor.split("|")
          let id = elemento[0]
          let letra = elemento[1]

          if(letra == 'A') {
            // Invocar modal
            $('#Alterar').on('shown.bs.modal', function() {
              $.post('modal.php', {funcionario_id: id}, function(resposta) {
                $('#corpoModalEdita').html(resposta)
              })
            })
            $('#Alterar').modal('show')
              $('#funcionario_cpf').inputmask('999.999.999-99');;
            $('#gravaAlteracao').click(function() {
              let id = $('#funcionario_id').val()
              let nome = $('#funcionario_nome').val()
              let email = $('#funcionario_email').val()
              let cpf = $('#funcionario_cpf').val()

              $.post('update.php', {funcionario_id:id, funcionario_nome:nome, funcionario_email:email, funcionario_cpf: cpf}, function(resposta){
                if(resposta == '1') {
                  swal('Alteração feita com sucesso!')
                } else {
                  swal('Algo deu errado.')
                }
              })
            })
          }

          if(letra == 'E') {
            swal({
              title: 'Excluir',
              text: 'Deseja realmente excluir esse registro?',
              icon: 'info',
              buttons: ['Não', 'Sim'],
              dangerMode: true,
            }).then((willDelete) => {
              if (willDelete){
                $.post('excluir.php', {funcionario_id: id}, function(resposta) {
                  if (resposta == '1') {
                    swal('Registro excluído com sucesso!', {icon: info})
                    $('#btnbuscar').click();
                  } else {
                    swal('Algo deu errado!')
                  }
                })
              }
            })
          }
        })
      })
    </script>
  </body>
</html>