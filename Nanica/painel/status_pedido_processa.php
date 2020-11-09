<?php 
    include '../conexao.php';
    session_start();

    $id_pedido_status = $_POST['id_pedido_status'];
    $pedido_status = $_POST['pedido_status'];
    $id_pedido = $_POST['id_pedido'];

    $nome_usuario = $_SESSION['nome'];

    $sql_select = "SELECT * FROM pedido_status WHERE id_pedido_status='$id_pedido_status'";
    $busca_select = mysqli_query($conn, $sql_select);

    while ($array = mysqli_fetch_array($busca_select)) {
      $id_pedido_status_select = $array['id_pedido_status'];
      $pedido_status_select = $array['pedido_status'];
      $id_pedido_select = $array['id_pedido'];
    }
    var_dump($id_pedido_status_select);
    var_dump($pedido_status_select);
    var_dump($id_pedido_selec);

    if  ($pedido_status == null) {
        $pedido_status = $pedido_status_select;
    } if ($id_pedido == null){
    }   $id_pedido = $id_pedido_select;
    
    $sql = "UPDATE pedido_status SET pedido_status='$pedido_status' where id_pedido_status='$id_pedido_status'";
    $update = mysqli_query($conn, $sql);

    $log = "INSERT INTO `log` () VALUES (NULL, '$nome_usuario', 'Status do pedido modificado!', now())"; 
    $insert_log = mysqli_query($conn, $log);

    if($update){
      echo '<script> alert("Status do pedido modificado!")</script>';
      echo '<script>window.location.href = "/painel/status_pedido.php";</script>';
    } else {
      echo '<script> alert("Status do pedido não atualizada!")</script>';
      echo '<script>window.location.href = "/painel/status_pedido.php";</script>'; 
    }

    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

//header('Location: ../painel/status_pedido.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->