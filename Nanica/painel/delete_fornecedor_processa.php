<?php 
    include '../conexao.php';
    session_start();

    $id_fornecedores = $_POST['id_fornecedores'];

    $nome_usuario = $_SESSION['nome'];

    $sql = "DELETE FROM fornecedores WHERE id_fornecedores='$id_fornecedores'";
    $delete = mysqli_query($conn, $sql);

    $log = "INSERT INTO `log` () VALUES (NULL, '$nome_usuario', 'Fornecedor excluído!', now())"; 
    $insert_log = mysqli_query($conn, $log);

    if($delete){
      echo '<script> alert("Fornecedor excluído!")</script>';
      echo '<script>window.location.href = "/painel/delete_fornecedor.php";</script>';
    } else {
      echo '<script> alert("Fornecedor não excluído!")</script>';
      echo '<script>window.location.href = "/painel/delete_fornecedor.php";</script>'; 
    }
    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

//header('Location: ../painel/delete_fornecedor.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->