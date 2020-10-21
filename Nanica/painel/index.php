<?php include 'sidebar.php'?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php include 'top.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Painel</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Fornecedor -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Fornecedores Cadastrados</div>

                      <?php 
                      include '../conexao.php';
                      $servername = "nanica.mysql.dbaas.com.br";
                      $username = "nanica";
                      $password = "PTGNanica2020!";
                      $dbname = "nanica";
            
                      $conn = mysqli_connect($servername, $username, $password, $dbname);
                      $contador = 0;
                      $sql = "SELECT * FROM `fornecedores`";
                      $resultado = mysqli_query($conn, $sql);
                      while ($array = mysqli_fetch_array($resultado)) {
                        $contador = $contador +1;
                      };
                      //var_dump($resultado["num_rows"]);
                      //echo $resultado;
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $contador; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Cestas vendidas -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Cestas Cadastradas</div>
                      <?php 
                      include '../conexao.php';
                      $servername = "nanica.mysql.dbaas.com.br";
                      $username = "nanica";
                      $password = "PTGNanica2020!";
                      $dbname = "nanica";
            
                      $conn = mysqli_connect($servername, $username, $password, $dbname);
                      $contador1 = 0;
                      $sql = "SELECT * FROM `cadastro_cesta`";
                      $resultado = mysqli_query($conn, $sql);
                      while ($array = mysqli_fetch_array($resultado)) {
                        $contador1 = $contador1 +1;
                      };
                      //var_dump($resultado["num_rows"]);
                      //echo $resultado;
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $contador1; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-basket fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <!--<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->

            <!-- Pending Requests Card Example -->
            <!--<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>-->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>