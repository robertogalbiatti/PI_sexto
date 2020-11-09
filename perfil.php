<?php include 'inc/header.php'; ?>

<body>

  <!--título-->
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Perfil Usuário</h1>
    <br>
    <p>Informações atuais do seu perfil.</p>
  </div>
  <!--Fim do título-->



  <div class="container">

    <!-- Page Heading -->
    <!--<h1 class="h3 mb-4 text-gray-800" style="padding-top: 25px;">Cadastro Usuários</h1>-->

    <form action="atualiza_usuario_processo.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Senha</label>
        <input type="password" class="form-control" name="senha" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['senha'];?>">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Nome</label>
        <input type="text" class="form-control" name="nome" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['nome'];?>">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">E-mail</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['email'];?>">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">CPF</label>
        <input type="text" class="form-control" name="cpf" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['cpf'];?>">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Endereço</label>
        <input type="text" class="form-control" name="endereco" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['endereco'];?>">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Número</label>
        <input type="text" class="form-control" name="num" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['num'];?>">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Bairro</label>
        <input type="text" class="form-control" name="bairro" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['bairro'];?>">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">CEP</label>
        <input type="text" class="form-control" name="cep" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['cep'];?>">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Celular</label>
        <input type="text" class="form-control" id="celular" name="celular" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['celular'];?>">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Data de Nascimento</label>
        <input type="text" class="form-control" name="nascimento" aria-describedby="emailHelp" placeholder="<?php echo $_SESSION['nascimento'];?>" data-mask="0000-00-00" data-mask-selectonfocus="true">
      </div>

      <br>
      <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
  </div>
  <!-- /.container-fluid -->

  </div>

  <br>
  <br>
  <br>



</body>

<?php include 'inc/footer.php'; ?>