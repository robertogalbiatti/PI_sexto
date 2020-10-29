<?php include 'sidebar.php'?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php include 'top.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Cadastro Fornecedor</h1>
    
          <form action="cadastro_fornecedor_processa.php" method="post">
            <div class="form-group">
            <label for="exampleInputEmail1">Razão Social</label>
            <input type="text" class="form-control" name="razaosocial" aria-describedby="emailHelp" placeholder="Entre com a razão social">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Entre com o e-mail">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">CNPJ</label>
            <input type="text" class="form-control" name="cnpj" aria-describedby="emailHelp" placeholder="Entre com o CNPJ">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Endereço</label>
            <input type="text" class="form-control" name="endereco" aria-describedby="emailHelp" placeholder="Entre com o endereço">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Num</label>
            <input type="text" class="form-control" name="num" aria-describedby="emailHelp" placeholder="Entre com o número">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Bairro</label>
            <input type="text" class="form-control" name="bairro" aria-describedby="emailHelp" placeholder="Entre com o bairro">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">CEP</label>
            <input type="text" class="form-control" name="cep" aria-describedby="emailHelp" placeholder="Entre com o CEP">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Telefone</label>
            <input type="text" class="form-control" name="telefone" aria-describedby="emailHelp" placeholder="Entre com o telefone">
            </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>