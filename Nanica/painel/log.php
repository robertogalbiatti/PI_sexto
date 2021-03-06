<?php include 'sidebar.php'?>

<!-- End of Sidebar -->

<!-- Content Wrapper -->
<?php include 'top.php'?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Log</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Log de Atividades do Sistema</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id do Log</th>
            <th>Responsável pela Ação</th>
            <th>Ação</th>
            <th>Data da Ação</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Id do Log</th>
            <th>Responsável pela Ação</th>
            <th>Ação</th>
            <th>Data da Ação</th>
          </tr>
        </tfoot>
        <tbody>

        <?php
          include '../conexao.php';
          
          $sql = "SELECT * FROM `log` ORDER BY id_log DESC ";
          $busca = mysqli_query($conn, $sql);

          while ($array = mysqli_fetch_array($busca)) {
            $id_log = $array['id_log'];
            $nome = $array['nome'];
            $acao = $array['acao'];
            $data = $array['data_acao'];
        ?>

          <tr>
            <td><?php echo $id_log?></td>
            <td><?php echo $nome?></td>
            <td><?php echo $acao?></td>
            <td><?php echo $data?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
  <!-- End of Main Content -->
<?php include 'footer.php'?>