<?php 
    include '../conexao.php';
    session_start();

    $id_usuarios = $_POST['id_usuarios'];

    $nome_usuario = $_SESSION['nome'];

    $sql = "DELETE FROM usuarios WHERE id_usuarios='$id_usuarios'";
    $delete = mysqli_query($conn, $sql);

    $log = "INSERT INTO `log` () VALUES (NULL, '$nome_usuario', 'Usuário excluído!', now())"; 
    $insert_log = mysqli_query($conn, $log);

    if($delete){
      echo '<script> alert("Usuário excluído!")</script>';
      echo '<script>window.location.href = "/painel/delete_usuario.php";</script>';
    } else {
      echo '<script> alert("Usuário não excluído!")</script>';
      echo '<script>window.location.href = "/painel/delete_usuario.php";</script>'; 
    }
    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

//header('Location: ../painel/delete_usuario.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->