<?php

session_start();

    include '../conexao.php';
    $id_usuarios = $_SESSION['id_usuarios'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $num = $_POST['num'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $celular = $_POST['celular'];
    $nascimento = $_POST['nascimento'];
    $adminn = $_POST['adminn'];

    $nome_usuario = $_SESSION['nome'];

    $sql_select = "SELECT * FROM `usuarios` WHERE id_usuarios='$id_usuarios'";
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
      $nascimento_select = $array['adminn'];
    }

    if  ($senha == null) {
        $senha = $_SESSION['senha'];
    } if ($nome == null) {
        $nome = $_SESSION['nome'];
    } if ($email == null){
        $email = $_SESSION['email'];
    } if ($cpf == null){
        $cpf = $_SESSION['cpf'];
    } if ($endereco == null){
        $endereco = $_SESSION['endereco'];
    } if ($num == null){
        $num = $_SESSION['num'];
    } if ($bairro == null){
        $bairro = $_SESSION['bairro'];
    } if ($cep == null){
        $cep = $_SESSION['cep'];
    } if ($celular == null){
        $celular = $_SESSION['celular'];
    } if ($nascimento == null){
        $nascimento = $_SESSION['nascimento'];
    } if ($adminn == null){
        $adminn = $_SESSION['adminn'];
    }

    $sql = "UPDATE usuarios SET senha='$senha', nome='$nome', email='$email', cpf='$cpf', endereco='$endereco', num='$num', bairro='$bairro', cep='$cep', celular='$celular', nascimento='$nascimento', adminn='$adminn' where id_usuarios='$id_usuarios' ";
    $update = mysqli_query($conn, $sql);

    $log = "INSERT INTO `log` () VALUES (NULL, '$nome_usuario', 'Usuário modificado!', now())"; 
    $insert_log = mysqli_query($conn, $log);

    if($update)
   {
     //header('location:compras.html');
     echo '<script> alert("Perfil atualizado!")</script>';
     echo '<script>window.location.href = "/painel/index.php";</script>';
     $_SESSION['senha'] = $senha;
     $_SESSION['nome'] = $nome;
     $_SESSION['email'] = $email;
     $_SESSION['cpf'] = $cpf;
     $_SESSION['endereco'] = $endereco;
     $_SESSION['num'] = $num;
     $_SESSION['bairro'] = $bairro;
     $_SESSION['cep'] = $cep;
     $_SESSION['celular'] = $celular;
     $_SESSION['nascimento'] = $nascimento;
     $_SESSION['adminn'] = $adminn;
     /*echo '<script>window.location.href = "/painel/perfil.php";</script>';
     var_dump($_SESSION['senha']);
     var_dump($_SESSION['nome']);
     var_dump($_SESSION['email']);
     var_dump($_SESSION['cpf']);
     var_dump($_SESSION['endereco']);
     var_dump($_SESSION['num']);
     var_dump($_SESSION['bairro']);
     var_dump($_SESSION['cep']);
     var_dump($_SESSION['celular']);
     var_dump($_SESSION['nascimento']);
     var_dump($_SESSION['adminn']);*/

   }

   else
   {
    echo '<script> alert("Perfil não atualizado!")</script>';
    echo '<script>window.location.href = "/painel/perfil.php";</script>'; 
   }

    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->