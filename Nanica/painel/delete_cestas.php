<?php include 'sidebar.php'?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php include 'top.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Excluir Cestas</h1>
    
          <form action="delete_cestas_processa.php" method="post">

            <div class="form-group">
            <label for="exampleInputEmail1">Id</label>
            <input type="text" class="form-control" name="id_cadastro_cesta" aria-describedby="emailHelp" placeholder="Entre com o id do registro que deseja excluir">
            </div>

                <button type="submit" class="btn btn-primary">Excluir</button>
          </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>