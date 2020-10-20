<?php 
    include '../conexao.php';
    $razao_social = $_POST['razaosocial'];
    $email = $_POST['email'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $num = $_POST['num'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO fornecedores (id_fornecedores, razao_social, email, cnpj, endereco, num, bairro, cep, telefone) VALUES (null, '$razao_social','$email','$cnpj','$endereco', '$num', '$bairro', '$cep', '$telefone')";
    $inserir = mysqli_query($conn, $sql);
    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

header('Location: ../painel/cadastro_fornecedor.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->