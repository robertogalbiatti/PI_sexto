<?php include 'sidebar.php'?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php include 'top.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Cadastro de Cestas</h1>
    
          <form action="cadastro_cesta_processa.php" method="post">

            <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Entre com o nome da cesta" required>
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Descrição</label>
            <input type="text" class="form-control" name="descricao" aria-describedby="emailHelp" placeholder="Entre com a descrição" required>
            </div>
            
            Tipo:       
            <div class="form-check">
            <input type="radio" name="tipo" value="1" checked> Frutas<br>
            <input type="radio" name="tipo" value="2"> Legumes/Verduras<br>
            <input type="radio" name="tipo" value="3"> Mixed
            </div>

            Tamanho:       
            <div class="form-check">
            <input type="radio" name="tamanho" value="1" checked> Pequeno<br>
            <input type="radio" name="tamanho" value="2"> Médio<br>
            <input type="radio" name="tamanho" value="3"> Grande
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Preço</label>
            <input type="text" class="form-control" name="preco" aria-describedby="emailHelp" placeholder="Entre com o preço" required>
            </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>