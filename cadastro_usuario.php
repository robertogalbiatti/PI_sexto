<?php include 'inc/header.php'; ?>


<div class="container">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800" style="padding-top: 25px;">Cadastro Usuários</h1>

  <form action="cadastro_usuario_processa.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Senha</label>
      <input type="password" class="form-control" name="senha" aria-describedby="emailHelp" placeholder="Entre com a senha" required>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Nome</label>
      <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="Entre com o nome" required>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">E-mail</label>
      <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Entre com o e-mail" required>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">CPF</label>
      <input type="text" class="form-control" name="cpf" aria-describedby="emailHelp" placeholder="Entre com o CPF" required>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Endereço</label>
      <input type="text" class="form-control" name="endereco" aria-describedby="emailHelp" placeholder="Entre com o endereço" required>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Número</label>
      <input type="text" class="form-control" name="num" aria-describedby="emailHelp" placeholder="Entre com o número" required>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Bairro</label>
      <input type="text" class="form-control" name="bairro" aria-describedby="emailHelp" placeholder="Entre com o bairro" required>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">CEP</label>
      <input type="text" class="form-control" name="cep" aria-describedby="emailHelp" placeholder="Entre com o CEP" required>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Celular</label>
      <input type="text" class="form-control" id="celular" name="celular" aria-describedby="emailHelp" placeholder="Entre com o número de celular" required>
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Data de Nascimento</label>
      <input type="text" class="form-control" name="nascimento" aria-describedby="emailHelp" placeholder="Entre com o padrão 'AAAA-MM-DD'" data-mask="0000-00-00" data-mask-selectonfocus="true" required>
    </div>

    <script>
      $(document).ready(function() {
        ​​​​​
        $('#celular').mask('(00) 0000-0000#');
      }​​​​​);
    </script>



    <!--Tipo:
            <input type="radio" name="adminn" value="1">Cliente
            <input type="radio" name="adminn" value="2">Admin-->

    <!--
            <div class="form-check">
            <input class="form-check-input" type="radio" name="adminn" value="1">
            <label class="form-check-label" for="exampleRadios1">Cliente</label>
            </div>
            -->
    <!--
            <div class="form-check">
            <input class="form-check-input" type="radio" name="adminn" value="2">
            <label class="form-check-label" for="exampleRadios1">Admin</label>
            </div>
            -->
    <button type="submit" class="btn btn-success">Cadastrar</button>
  </form>
</div>
<!-- /.container-fluid -->

</div>

<br>
<br>
<br>


<?php include 'inc/footer.php'; ?>