<?php 
    include '../conexao.php';
    $id_fornecedores = $_POST['id_fornecedores'];

    $sql = "DELETE FROM fornecedores WHERE id_fornecedores='$id_fornecedores'";
    $delete = mysqli_query($conn, $sql);

    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

header('Location: ../painel/delete_fornecedor.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->