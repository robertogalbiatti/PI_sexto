<?php 
    include '../conexao.php';
    session_start();

    $razao_social = $_POST['razaosocial'];
    $email = $_POST['email'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $num = $_POST['num'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];

    $nome_usuario = $_SESSION['nome'];

    $sql = "INSERT INTO fornecedores (id_fornecedores, razao_social, email, cnpj, endereco, num, bairro, cep, telefone) VALUES (null, '$razao_social','$email','$cnpj','$endereco', '$num', '$bairro', '$cep', '$telefone')";
    $inserir = mysqli_query($conn, $sql);

    $log = "INSERT INTO `log` () VALUES (NULL, '$nome_usuario', 'Fornecedor cadastrado!', now())"; 
    $insert_log = mysqli_query($conn, $log);

    if($insert){
      echo '<script> alert("Fornecedor cadastrado!")</script>';
      echo '<script>window.location.href = "/painel/cadastro_fornecedor.php";</script>';
    } else {
      echo '<script> alert("Fornecedor não cadastrado!")</script>';
      echo '<script>window.location.href = "/painel/cadastro_fornecedor.php";</script>'; 
    }
    //var_dump($nome_usuario);
    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

//header('Location: ../painel/cadastro_fornecedor.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->