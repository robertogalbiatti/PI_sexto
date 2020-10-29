<?php 
    include '../conexao.php';
    $id_usuarios = $_POST['id_usuarios'];

    $sql = "DELETE FROM usuarios WHERE id_usuarios='$id_usuarios'";
    $delete = mysqli_query($conn, $sql);

    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

header('Location: ../painel/delete_usuario.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->