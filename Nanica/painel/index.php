<?php include 'sidebar.php';
include '../conexao.php';?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php include 'top.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- Page Heading -->
          <!--<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Painel</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório</a>
          </div>-->

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

                      $contador1 = 0;
                      $sql1 = "SELECT * FROM `cadastro_cesta`";
                      $resultado1 = mysqli_query($conn, $sql1);
                      while ($array1 = mysqli_fetch_array($resultado1)) {
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

            <!-- Pedidos realizados -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">Pedidos realizados</div>
                      <?php 
                      include '../conexao.php';
                      $contador_status1 = 0;
                      $contador_status2 = 0;
                      $contador_status3 = 0;
                      $contador_status4 = 0;
                      $contador_status5 = 0;

                      $sql_status1 = "SELECT * FROM pedido_status WHERE pedido_status = '1'";
                      $sql_status2 = "SELECT * FROM pedido_status WHERE pedido_status = '2'";
                      $sql_status3 = "SELECT * FROM pedido_status WHERE pedido_status = '3'";
                      $sql_status4 = "SELECT * FROM pedido_status WHERE pedido_status = '4'";
                      $sql_status5 = "SELECT * FROM pedido_status WHERE pedido_status = '5'";
                      

                      $resultado_status1 = mysqli_query($conn, $sql_status1);
                      while ($array_status1 = mysqli_fetch_array($resultado_status1)) {
                        $contador_status1 =  $contador_status1 +1;
                      };

                      $resultado_status2 = mysqli_query($conn, $sql_status2);
                      while ($array_status2 = mysqli_fetch_array($resultado_status2)) {
                        $contador_status2 =  $contador_status2 +1;
                      };

                      $resultado_status3 = mysqli_query($conn, $sql_status3);
                      while ($array_status3 = mysqli_fetch_array($resultado_status3)) {
                        $contador_status3 =  $contador_status3 +1;
                      };

                      $resultado_status4 = mysqli_query($conn, $sql_status4);
                      while ($array_status4 = mysqli_fetch_array($resultado_status4)) {
                        $contador_status4 =  $contador_status4 +1;
                      };

                      $resultado_status5 = mysqli_query($conn, $sql_status5);
                      while ($array_status5 = mysqli_fetch_array($resultado_status5)) {
                        $contador_status5 =  $contador_status5 +1;
                      };
                

                      $contador2 = 0;
                      //$sql2 = "SELECT * FROM `pedido`";
                      $sql2= "SELECT distinct id_pedido, count(numero_pedido) from pedido group by numero_pedido";
                      $resultado2 = mysqli_query($conn, $sql2);
                      while ($array2 = mysqli_fetch_array($resultado2)) {
                        $contador2 = $contador2 +1;
                      };
                      //var_dump($resultado["num_rows"]);
                      //echo $resultado;
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $contador2; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Clientes cadastrados -->
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-sm font-weight-bold text-info text-uppercase mb-1">Clientes Cadastrados</div>
                      <?php 
            
                      $contador3 = 0;
                      $sql3 = "SELECT * FROM `usuarios` where adminn=1";
                      $resultado3 = mysqli_query($conn, $sql3);
                      while ($array3 = mysqli_fetch_array($resultado3)) {
                        $contador3 = $contador3 +1;
                      };

                      $contador4 = 0;
                      $sql4 = "SELECT * FROM `usuarios` where adminn=2";
                      $resultado4 = mysqli_query($conn, $sql4);
                      while ($array4 = mysqli_fetch_array($resultado4)) {
                        $contador4 = $contador4 +1;
                      };
                      //var_dump($resultado["num_rows"]);
                      //echo $resultado;
                      ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $contador3; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-9 col-lg-8">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tipos de Usuários/Fornecedores Cadastrados</h6>
                  <div class="dropdown no-arrow">
                    <!--<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>-->
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <!-- Começo Google Chats-->
                 
                       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                       <script type="text/javascript">
                          google.charts.load('current', {'packages':['corechart']});
                          google.charts.setOnLoadCallback(drawChart);

                          function drawChart() {

                          var data = google.visualization.arrayToDataTable([
                          ['Task', 'Usuários'],
                          ['Clientes', <?php echo $contador3 ?>],
                          ['Administradores',<?php echo $contador4 ?>],
                          ['Fornecedores',<?php echo $contador ?>],
                          ]);

                          var options = {
                            title: 'Tipos de Usuários/Fornecedores'
                          };

                          var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                          chart.draw(data, options);
                         }
                        </script>
                          <body>
                            <div id="piechart" style="width: 700px; height: 300px;"></div>
                          </body>

                    <!--Fim Google Charts-->
                  </div>
                </div>
              </div>
            </div>

             <!-- Pie Chart -->
            <div class="col-xl-9 col-lg-8">
              <div class="card shadow mb-4">
                 <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Quantidade de Pedidos</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                 <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Status Pedido', 'Confirmado', 'Processando', 'Preparando', 'Despachada', 'Entregue'],
          ['', <?php echo $contador_status1 ?>, <?php echo $contador_status2 ?>, <?php echo $contador_status3 ?> , <?php echo $contador_status4 ?> , <?php echo $contador_status5 ?>],
        ]);

        var options = {
          title : 'Status de Todos os Pedidos',
          vAxis: {title: 'Quantidade'},
          hAxis: {title: 'Status'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 700px; height: 500px;"></div>
  </body>
</html>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>