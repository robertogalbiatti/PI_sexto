<?php include 'sidebar.php'?>

<!-- End of Sidebar -->

<!-- Content Wrapper -->
<?php include 'top.php'?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Usuários</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Cadastro de Usuários do Sistema</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Senha</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Celular</th>
            <th>Nascimento</th>
            <th>Admin/Cliente</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Senha</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Celular</th>
            <th>Nascimento</th>
            <th>Admin/Cliente</th>
          </tr>
        </tfoot>
        <tbody>

        <?php
          include '../conexao.php';
          $servername = "nanica.mysql.dbaas.com.br";
          $username = "nanica";
          $password = "PTGNanica2020!";
          $dbname = "nanica";


          
          $sql = "SELECT * FROM `usuarios` ORDER BY id_usuarios DESC";
          $busca = mysqli_query($conn, $sql);

          while ($array = mysqli_fetch_array($busca)) {
            $id_usuarios = $array['id_usuarios'];
            $senha = $array['senha'];
            $nome = $array['nome'];
            $email = $array['email'];
            $cpf = $array['cpf'];
            $endereco = $array['endereco'];
            $num = $array['num'];
            $bairro = $array['bairro'];
            $cep = $array['cep'];
            $celular = $array['celular'];
            $nascimento = $array['nascimento'];
            $admin = $array['adminn'];
        ?>
          <tr>
            <td><?php echo $id_usuarios?></td>
            <td><?php echo $senha?></td>
            <td><?php echo $nome?></td>
            <td><?php echo $email?></td>
            <td><?php echo $cpf?></td>
            <td><?php echo $endereco?></td>
            <td><?php echo $num?></td>
            <td><?php echo $bairro?></td>
            <td><?php echo $cep?></td>
            <td><?php echo $celular?></td>
            <td><?php echo $nascimento?></td>
            <td><?php echo $admin ?></td>
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