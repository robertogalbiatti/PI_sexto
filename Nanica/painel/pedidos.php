<?php include 'sidebar.php'?>

<!-- End of Sidebar -->

<!-- Content Wrapper -->
<?php include 'top.php'?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Pedidos</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Registros de Pedidos do Sistema</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Número do Pedido</th>
            <th>Id da cesta</th>
            <th>Quantidade</th>
            <th>Sub Total</th>
            <th>Recorrência</th>
            <th>Frequência</th>
            <th>Id do cliente</th>
            <th>Id do entregador</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Número do Pedido</th>
            <th>Id da cesta</th>
            <th>Quantidade</th>
            <th>Sub Total</th>
            <th>Recorrência</th>
            <th>Frequência</th>
            <th>Id do cliente</th>
            <th>Id do entregador</th>
          </tr>
        </tfoot>
        <tbody>

        <?php
          include '../conexao.php';
          
          $sql = "SELECT * FROM `pedido` ORDER BY id_pedido DESC";
          $busca = mysqli_query($conn, $sql);

          while ($array = mysqli_fetch_array($busca)) {
            $id_pedido = $array['id_pedido'];
            $numero_pedido = $array['numero_pedido'];
            $id_cadastro_cesta = $array['id_cadastro_cesta'];
            $quantidade = $array['quantidade'];
            $subtotal = $array['subtotal'];
            $recorrencia = $array['recorrencia'];
            $frequencia = $array['frequencia'];
            $id_usuarios = $array['id_usuarios'];
            $id_entregador = $array['id_entregador'];
        ?>
          <tr>
            <td><?php echo $id_pedido?></td>
            <td><?php echo $numero_pedido?></td>
            <td><?php echo $id_cadastro_cesta?></td>
            <td><?php echo $quantidade?></td>
            <td><?php echo $subtotal?></td>
            <td><?php echo $recorrencia?></td>
            <td><?php echo $frequencia?></td>
            <td><?php echo $id_usuarios?></td>
            <td><?php echo $id_entregador?></td>
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