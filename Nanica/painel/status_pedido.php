<?php include 'sidebar.php'?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php include 'top.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Modificar Status Pedido</h1>
    
          <form action="status_pedido_processa.php" method="post">

            <div class="form-group">
                <label for="exampleInputEmail1">Id</label>
                <input type="text" class="form-control" name="id_pedido_status" aria-describedby="emailHelp" placeholder="Entre com o id do pedido que deseja modificar">
            </div>
            
            Status do Pedido:       
            <div class="form-check">
                <input type="radio" name="pedido_status" value="1"> Pedido confirmado<br>
                <input type="radio" name="pedido_status" value="2"> Pedido sendo processado<br>
                <input type="radio" name="pedido_status" value="3"> Cesta sendo preparada<br>
                <input type="radio" name="pedido_status" value="4"> Cesta despachada<br>
                <input type="radio" name="pedido_status" value="5"> Pedido Entregue
            </div>

                <button type="submit" class="btn btn-primary">Modificar</button>
          </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>