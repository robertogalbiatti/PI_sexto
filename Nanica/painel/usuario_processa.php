<?php 
    include '../conexao.php';
    session_start();

    $id_usuarios = $_POST['id_usuarios'];
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
    $admin = $_POST['adminn'];

    $nome_usuario = $_SESSION['nome'];
    
    $login = mysqli_query($conn, "SELECT * FROM `usuarios` WHERE email = '$email'");

    while ($array = mysqli_fetch_array($login)) {
    $email_select = $array['email'];
    }
    if ($email == $email_select) {
      echo '<script> alert("Usuário já cadastrado!")</script>';
      echo '<script>window.location.href = "/painel/index.php";</script>'; 
    }

    $sql = "INSERT INTO usuarios (id_usuarios, senha, nome, email, cpf, endereco, num, bairro, cep, celular, nascimento, adminn) VALUES (null, '$senha','$nome','$email','$cpf','$endereco','$num','$bairro','$cep','$celular','$nascimento','$admin')";
    $inserir = mysqli_query($conn, $sql);


    $log = "INSERT INTO `log` () VALUES (NULL, '$nome_usuario', 'Usuário cadastrado!', now())"; 
    $insert_log = mysqli_query($conn, $log);
    //echo var_dump($razao_social);

    if($inserir){
      echo '<script> alert("Usuário cadastrado!")</script>';
      echo '<script>window.location.href = "/painel/usuario_cadastro.php";</script>';
    } else {
    echo '<script> alert("Usuário não cadastrado!")</script>';
    echo '<script>window.location.href = "/painel/usuario_cadastro.php";</script>'; 
    }

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

//header('Location: ../painel/usuario_cadastro.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->