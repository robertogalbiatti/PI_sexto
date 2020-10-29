<?php include 'sidebar.php'?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php include 'top.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Modificar Cestas</h1>
    
          <form action="update_cestas_processa.php" method="post">

            <div class="form-group">
            <label for="exampleInputEmail1">Id</label>
            <input type="text" class="form-control" name="id_cadastro_cesta" aria-describedby="emailHelp" placeholder="Entre com o id do registro que deseja modificar">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="Entre com o novo nome da cesta">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Preço</label>
            <input type="text" class="form-control" name="preco" aria-describedby="emailHelp" placeholder="Entre com o novo preço">
            </div>

                <button type="submit" class="btn btn-primary">Modificar</button>
          </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>