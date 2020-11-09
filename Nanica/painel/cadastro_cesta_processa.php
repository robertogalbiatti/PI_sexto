<?php 
    include '../conexao.php';
    session_start();

    $name = $_POST['name'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $tamanho = $_POST['tamanho'];
    $preco = $_POST['preco'];

    $nome_usuario = $_SESSION['nome'];

    $sql = "INSERT INTO cadastro_cesta (id_cadastro_cesta, nome, descricao, tipo, tamanho, preco) VALUES (null, '$name', '$descricao', '$tipo', '$tamanho', '$preco')";
    $inserir = mysqli_query($conn, $sql);

    $log = "INSERT INTO `log` () VALUES (NULL, '$nome_usuario', 'Cesta cadastrada!', now())"; 
    $insert_log = mysqli_query($conn, $log);

    if($insert){
      echo '<script> alert("Cesta cadastrada!")</script>';
      echo '<script>window.location.href = "/painel/cadastro_cesta.php";</script>';
    } else {
      echo '<script> alert("Cesta não cadastrada!")</script>';
      echo '<script>window.location.href = "/painel/cadastro_cesta.php";</script>'; 
    }
    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

//header('Location: ../painel/cadastro_cesta.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->