<?php include 'sidebar.php'?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php include 'top.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Cadastro Usuários</h1>
    
          <form action="cadastro_fornecedor_processa.php" method="post">
            <div class="form-group">
            <label for="exampleInputEmail1">Senha</label>
            <input type="text" class="form-control" name="senha" aria-describedby="emailHelp" placeholder="Entre com a senha">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="Entre com o nome">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" name="cnpj" aria-describedby="emailHelp" placeholder="Entre com o e-mail">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">CPF</label>
            <input type="text" class="form-control" name="cpf" aria-describedby="emailHelp" placeholder="Entre com o CPF">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Endereço</label>
            <input type="text" class="form-control" name="endereco" aria-describedby="emailHelp" placeholder="Entre com o endereço">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Número</label>
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
            <label for="exampleInputEmail1">Celular</label>
            <input type="text" class="form-control" name="cep" aria-describedby="emailHelp" placeholder="Entre com o celular">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Data de Nascimento</label>
            <input type="text" class="form-control" name="nascimento" aria-describedby="emailHelp" placeholder="Entre com a data de nascimento">
            </div>

            <div class="form-check">
            <label class="form-check-label" for="exampleRadios1">Cliente</label>
            <input class="form-check-input" type="radio" name="adminn" value="1">
            </div>

            <div class="form-check">
            <label class="form-check-label" for="exampleRadios2">Admin</label>
            <input class="form-check-input" type="radio" name="adminn" value="2">
            </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>