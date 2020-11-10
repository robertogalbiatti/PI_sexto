<?php include 'sidebar.php'?>

    <!-- End of Sidebar -->
    
    <!-- Content Wrapper -->
    <?php include 'top.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Perfil do Usuário</h1>
            <?php 
                /*session_start();
                $email_momento = $_SESSION['email'];
                $sql_select = "SELECT * FROM `usuarios` WHERE email ='$email_momento'";
                $busca_select = mysqli_query($conn, $sql_select);

                while ($array = mysqli_fetch_array($busca_select)) {
                  $id_usuarios_select = $array['id_usuarios'];
                  $senha_select = $array['senha'];
                  $nome_select = $array['nome'];
                  $email_select = $array['email'];
                  $cpf_select = $array['cpf'];
                  $endereco_select = $array['endereco'];
                  $num_select = $array['num'];
                  $bairro_select = $array['bairro'];
                  $cep_select = $array['cep'];
                  $celular_select = $array['celular'];
                  $nascimento_select = $array['nascimento'];
                }
                var_dump($celular_select);*/

            ?>
          <form action="update_usuario_processa.php" method="POST">
            <div class="form-group">
            <label for="exampleInputEmail1">Senha</label>
            <input type="text" class="form-control" name="senha" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['senha']; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['nome']; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['email']; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">CPF</label>
            <input type="text" class="form-control" name="cpf" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['cpf']; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Endereço</label>
            <input type="text" class="form-control" name="endereco" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['endereco']; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Número</label>
            <input type="text" class="form-control" name="num" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['num']; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Bairro</label>
            <input type="text" class="form-control" name="bairro" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['bairro']; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">CEP</label>
            <input type="text" class="form-control" name="cep" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['cep']; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Celular</label>
            <input type="text" class="form-control" name="celular" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['celular']; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Data de Nascimento</label>
            <input type="text" class="form-control" name="nascimento" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['nascimento']; ?>">
            </div>

            <!--Tipo:
            <input type="radio" name="adminn" value="1">Cliente
            <input type="radio" name="adminn" value="2">Admin-->

            <div class="form-check">
            <input class="form-check-input" type="radio" name="adminn" value="1">
            <label class="form-check-label" for="exampleRadios1">Cliente</label>
            </div>

            <div class="form-check">
            <input class="form-check-input" type="radio" name="adminn" value="2" checked>
            <label class="form-check-label" for="exampleRadios1">Admin</label>
            </div>

                <button type="submit" class="btn btn-primary">Atualizar</button>
          </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>