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
            <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="Entre com o nome da cesta">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Descrição</label>
            <input type="text" class="form-control" name="descricao" aria-describedby="emailHelp" placeholder="Entre com a descrição">
            </div>
            
            Tipo:       
            <div class="form-check">
            <input type="radio" name="tipo" value="1"> Frutas<br>
            <input type="radio" name="tipo" value="2"> Legumes/Verduras<br>
            <input type="radio" name="tipo" value="3"> Mixed
            </div>

            Tamanho:       
            <div class="form-check">
            <input type="radio" name="tamanho" value="1"> Pequeno<br>
            <input type="radio" name="tamanho" value="2"> Médio<br>
            <input type="radio" name="tamanho" value="3"> Grande
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Preço</label>
            <input type="text" class="form-control" name="preco" aria-describedby="emailHelp" placeholder="Entre com o preço">
            </div>

                <button type="submit" class="btn btn-primary">Modificar</button>
          </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>