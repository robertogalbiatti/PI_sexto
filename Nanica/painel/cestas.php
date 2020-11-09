<?php include 'sidebar.php'?>

<!-- End of Sidebar -->

<!-- Content Wrapper -->
<?php include 'top.php'?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Cestas</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Cadastro de Cestas (produtos)</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tipo</th>
            <th>Tamanho</th>
            <th>Preço</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Tipo</th>
            <th>Tamanho</th>
            <th>Preço</th>
          </tr>
        </tfoot>
        <tbody>

        <?php
          include '../conexao.php';
          
          $sql = "SELECT * FROM `cadastro_cesta` ORDER BY id_cadastro_cesta DESC";
          $busca = mysqli_query($conn, $sql);

          while ($array = mysqli_fetch_array($busca)) {
            $id_cadastro_cesta = $array['id_cadastro_cesta'];
            $nome = $array['nome'];
            $descricao = $array['descricao'];
            $tipo = $array['tipo'];
            $tamanho = $array['tamanho'];
            $preco = $array['preco'];
        ?>
          <tr>
            <td><?php echo $id_cadastro_cesta?></td>
            <td><?php echo $nome?></td>
            <td><?php echo $descricao?></td>
            <td><?php echo $tipo?></td>
            <td><?php echo $tamanho?></td>
            <td><?php echo $preco?></td>
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