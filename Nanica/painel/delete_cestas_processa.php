<?php 
    include '../conexao.php';
    $id_cadastro_cesta = $_POST['id_cadastro_cesta'];

    $sql = "DELETE FROM cadastro_cesta WHERE id_cadastro_cesta='$id_cadastro_cesta'";
    $delete = mysqli_query($conn, $sql);

    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

header('Location: ../painel/delete_cestas.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->