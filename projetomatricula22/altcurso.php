<?php
include 'testasessao.php';
include 'banco.php';
$id = $_GET['id'];

$sql = "select * from tbcursos where codcurso = '$id'";
$busca = $conexao->query($sql);
$linha = $busca->fetch_array(MYSQLI_ASSOC);

?>


<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">
  <head>














<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.jpg">
<link rel="icon" type="image/png" href="./assets/img/favicon.jpg">

<title>
  
   Colégio CG

  

  
</title>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />





  </head>


  <body class="g-sidenav-show  bg-gray-100">
    

    

    
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="principal.php" >
      <img src="./assets/img/favicon.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white"  >Colégio CG</span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      

      
        

          

          
  
<li class="nav-item">
  <a class="nav-link text-white " href="alunos.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">people</i></i>
      </div>
    
    <span class="nav-link-text ms-1">Alunos</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="Cursos.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">workspaces</i>
      </div>
    
    <span class="nav-link-text ms-1">Cursos técnicos</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="matricula.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">book</i>
      </div>
    
    <span class="nav-link-text ms-1">Matrículas</span>
  </a>
</li>

  
<li class="nav-item">
  <a class="nav-link text-white " href="users.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">manage_accounts</i>
      </div>
    
    <span class="nav-link-text ms-1">Usuários</span>
  </a>
</li>

  


  


  
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Conta</h6>
    </li>
  

<li class="nav-item">
  <a class="nav-link text-white " href="cadastro.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">assignment</i>
      </div>
    
    <span class="nav-link-text ms-1">Cadastrar</span>
  </a>
</li>
  
<li class="nav-item">
  <a class="nav-link text-white " href="sair.php">
    
      <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
        <i class="material-icons opacity-10">login</i>
      </div>
    
    <span class="nav-link-text ms-1">Sair</span>
  </a>
</li>

  




          

        
      
    </ul>
  </div>
  
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
     
    </div>
    
  </div>
  
</aside>

      <main class="main-content border-radius-lg ">
        <!-- Navbar -->


<!-- End Navbar -->
    <div class="row mt-4">
      <div class="col-10">
       




 <section class="content">
        <div class="container-fluid">
          <div class="card card-solid">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <form action="alterarcurso.php?" method="POST">
                  <?php
                        if(isset($_GET['insert'])){
                          if($_GET['insert'] == 'ok'){
                            echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                                  <strong>Atenção</strong> Alteração Feita com sucesso!
                                  
                                  </button>
                                </div>';
                          }else{
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  <strong>Atenção</strong> Erro na Alteração :(
                                  
                                  </button>
                                </div>';
                          }
                        }
                  ?>
                    <h3><b>Alterar Curso</b></h3>
					
				<!--IDENTIFICAÇÃO-->
                    <div class="input-group mb-3">
                      <input type="hidden" class="form-control"  name="id" id="id" value="<?php echo $linha['codcurso'] ?>">
                    </div>
					
					
                    <label><h4><b>Curso</b></h4></label>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="<?php echo $linha['nome'] ?>" name="nome" id="nome" >
                    </div>
                    
					<label><h4><b>turno</b></h4></label>
                          <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="<?php echo $linha['turno'] ?>" name="turno" id="turno" >
                    </div>
						  
			        <label><h4><b>Carga Horária</b></h4></label>
                          <div class="input-group mb-3">
                            <input type="text" class="form-control " placeholder="<?php echo $linha['cargahoraria'] ?>" name="cargahoraria" id="cargahoraria" >
                   </div> 
				   
				   
					
					  <div class="col-12">
                      <button type="submit" class="btn btn-success btn-block"><b>Alterar</b></button>
                      </div>
					  
                  </form>  
                
                  <?php
                  if(isset($_GET['delete'])){
                    if($_GET['delete'] == 'ok'){
                      echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                      <strong>Atenção</strong> delete com sucesso!
                      
                      </button>
                    </div>';
                    }
                  }
                  ?>    
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


        </div>
      </div>
      <div class="col-lg-6 col-md-5">
        <div id="map" class="mt-0 mt-lg-n4"></div>
      </div>
    


      </div>
    </div>
  </div>
</div>

<div class="row mt-4">
  <div class="col-lg-5 mb-lg-0 mb-4">
    <div class="card z-index-2 mt-4">
 
</div>

  </div>
  <div class="col-lg-7">
    <div class="card z-index-2">
 
 
</div>

  </div>
</div>



                <footer class="footer py-4  ">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
       
      </div>
     
    </div>
  </div>
</footer>

            </div>

         
       </main>
    

      
        









<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>









































































<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </body>

</html>
