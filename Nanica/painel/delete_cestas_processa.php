<?php 
    include '../conexao.php';
    session_start();

    $id_cadastro_cesta = $_POST['id_cadastro_cesta'];

    $nome_usuario = $_SESSION['nome'];

    $sql = "DELETE FROM cadastro_cesta WHERE id_cadastro_cesta='$id_cadastro_cesta'";
    $delete = mysqli_query($conn, $sql);

    $log = "INSERT INTO `log` () VALUES (NULL, '$nome_usuario', 'Cesta excluída!', now())"; 
    $insert_log = mysqli_query($conn, $log);

    if($delete){
      echo '<script> alert("Cesta excluída!")</script>';
      echo '<script>window.location.href = "/painel/delete_cestas.php";</script>';
    } else {
      echo '<script> alert("Cesta não excluída!")</script>';
      echo '<script>window.location.href = "/painel/delete_cestas.php";</script>'; 
    }

    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

//header('Location: ../painel/delete_cestas.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->