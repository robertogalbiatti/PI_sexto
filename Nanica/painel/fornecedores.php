<?php include 'sidebar.php'?>

<!-- End of Sidebar -->

<!-- Content Wrapper -->
<?php include 'top.php'?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Fornecedores</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Cadastro de Fornecedores do Sistema</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Id</th>
            <th>Razão Social</th>
            <th>Email</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>Num</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Telefone</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
          <th>Id</th>
            <th>Razão Social</th>
            <th>Email</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>Num</th>
            <th>Bairro</th>
            <th>CEP</th>
            <th>Telefone</th>
          </tr>
        </tfoot>
        <tbody>

        <?php
          include '../conexao.php';
          $servername = "nanica.mysql.dbaas.com.br";
          $username = "nanica";
          $password = "PTGNanica2020!";
          $dbname = "nanica";
          
          $sql = "SELECT * FROM `fornecedores` ORDER BY id_fornecedores DESC";
          $busca = mysqli_query($conn, $sql);

          while ($array = mysqli_fetch_array($busca)) {
            $id_fornecedores = $array['id_fornecedores'];
            $razao_social = $array['razao_social'];
            $email = $array['email'];
            $cnpj = $array['cnpj'];
            $endereco = $array['endereco'];
            $num = $array['num'];
            $bairro = $array['bairro'];
            $cep = $array['cep'];
            $telefone = $array['telefone'];
        ?>
          <tr>
            <td><?php echo $id_fornecedores?></td>
            <td><?php echo $razao_social?></td>
            <td><?php echo $email?></td>
            <td><?php echo $cnpj?></td>
            <td><?php echo $endereco?></td>
            <td><?php echo $num?></td>
            <td><?php echo $bairro?></td>
            <td><?php echo $cep?></td>
            <td><?php echo $telefone?></td>
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