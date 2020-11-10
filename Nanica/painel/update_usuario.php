<?php include 'sidebar.php'?>

    <!-- End of Sidebar -->
<?php 
$id_cliente = $_SESSION['id_cliente'];
var_dump($id_cliente);

if (isset($_SESSION['cliente'])) {
  include '../conexao.php';

          $sql = "SELECT * FROM `usuarios` WHERE id_usuarios = '$id_cliente' ";
          $busca = mysqli_query($conn, $sql);

          while ($array = mysqli_fetch_array($busca)) {
          var_dump($array);
            //$senha_cliente = $array['senha'];
            //$nome_cliente = $array['nome'];
            //$email_cliente = $array['email'];
            //$cpf_cliente = $array['cpf'];
            //$endereco_cliente = $array['endereco'];
            //$num_cliente = $array['num'];
            //$bairro_cliente = $array['bairro'];
            //$cep_cliente = $array['cep'];
            //$celular_cliente = $array['celular'];
            //$nascimento_cliente = $array['nascimento'];
          }
}
var_dump($array);


?>
    <!-- Content Wrapper -->
    <?php include 'top.php'?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Modificar Usuários</h1>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
    
          <form action="update_usuario_processa.php" method="post">
          
            <div class="form-group">
            <label for="exampleInputEmail1">Id</label>
            <input type="text" class="form-control" name="id_usuarios" aria-describedby="emailHelp" placeholder="<?php echo $id_cliente; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Senha</label>
            <input type="text" class="form-control" name="senha" aria-describedby="emailHelp" placeholder="<?php echo $senha_cliente; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="<?php echo $nome_cliente; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="<?php echo $email_cliente; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">CPF</label>
            <input type="text" class="form-control" name="cpf" aria-describedby="emailHelp" placeholder="<?php echo $cpf_cliente; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Endereço</label>
            <input type="text" class="form-control" name="endereco" aria-describedby="emailHelp" placeholder="<?php echo $endereco_cliente; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Número</label>
            <input type="text" class="form-control" name="num" aria-describedby="emailHelp" placeholder="<?php echo $num_cliente; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Bairro</label>
            <input type="text" class="form-control" name="bairro" aria-describedby="emailHelp" placeholder="<?php echo $bairro_cliente; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">CEP</label>
            <input type="text" class="form-control" name="cep" aria-describedby="emailHelp" placeholder="<?php echo $cep_cliente; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Celular</label>
            <input type="text" class="form-control" name="celular" aria-describedby="emailHelp" placeholder="<?php echo $celular_cliente; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Data de Nascimento</label>
            <input type="text" class="form-control" name="nascimento" aria-describedby="emailHelp" placeholder="<?php echo $nascimento_cliente; ?>">
            </div>

            <!--Tipo:
            <input type="radio" name="adminn" value="1">Cliente
            <input type="radio" name="adminn" value="2">Admin-->

            <!--<div class="form-check">
            <input class="form-check-input" type="radio" name="adminn" value="1">
            <label class="form-check-label" for="exampleRadios1">Cliente</label>
            </div>

            <div class="form-check">
            <input class="form-check-input" type="radio" name="adminn" value="2">
            <label class="form-check-label" for="exampleRadios1">Admin</label>
            </div>-->

                <button type="submit" class="btn btn-primary">Modificar</button>
          </form>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include 'footer.php'?>