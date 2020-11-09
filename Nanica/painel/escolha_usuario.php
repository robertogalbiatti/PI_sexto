<?php include 'sidebar.php'?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <?php include 'top.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Escolha Usuário</h1>
          
                    <!-- Topbar Search -->
                    <form action="update_usuario.php" method="GET">
                    <label for="browser">Escolha o usuário para editar:</label>
                    <input list="browsers" name="browser" id="browser">
                    <datalist id="browsers">

                    <?php
          include '../conexao.php';

          $sql = "SELECT * FROM `usuarios` WHERE adminn = '1'";
          $busca = mysqli_query($conn, $sql);

          while ($array = mysqli_fetch_array($busca)) {
            $_SESSION['cliente'] = true;
            $id_usuarios_cliente = $array[0];
            $nome_cliente = $array[2];
            $_SESSION['id_cliente'] = $id_usuarios_cliente;
        ?>
                    <option value="<?php echo $nome_cliente; ?>">
                
          <?php }?>
          </datalist>
  <input type="submit" value = "Escolha usuário">
</form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>