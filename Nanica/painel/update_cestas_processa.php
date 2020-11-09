<?php 
    include '../conexao.php';
    session_start();

    $id_cadastro_cesta = $_POST['id_cadastro_cesta'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $tipo = $_POST['tipo'];
    $tamanho = $_POST['tamanho'];
    $preco = $_POST['preco'];

    $nome_usuario = $_SESSION['nome'];

    $sql_select = "SELECT * FROM `cadastro_cesta` WHERE id_cadastro_cesta='$id_cadastro_cesta'";
    $busca_select = mysqli_query($conn, $sql_select);


          while ($array = mysqli_fetch_array($busca_select)) {
            $id_cadastro_cesta_select = $array['id_cadastro_cesta'];
            $nome_select = $array['nome'];
            $descricao_select = $array['descricao'];
            $tipo_select = $array['tipo'];
            $tamanho_select = $array['tamanho'];
            $preco_select = $array['preco'];
          }
    

    if  ($nome == null) { 
        $nome = $nome_select;
    } if  ($descricao == null) {
        $descricao = $descricao_select;
    } if  ($tipo == null) {
        $tipo = $tipo_select;
    } if  ($tamanho == null) {
        $tamanho = $tamanho_select;
    } if ($preco == null) {
        $preco = $preco_select; 
    }

    $sql = "UPDATE cadastro_cesta SET nome='$nome', descricao='$descricao', tipo='$tipo', tamanho='$tamanho', preco='$preco' WHERE id_cadastro_cesta='$id_cadastro_cesta'";
    $update = mysqli_query($conn, $sql);

    $log = "INSERT INTO `log` () VALUES (NULL, '$nome_usuario', 'Cesta modificada!', now())"; 
    $insert_log = mysqli_query($conn, $log);

    if($update){
        echo '<script> alert("Cesta atualizada!")</script>';
        echo '<script>window.location.href = "/painel/update_cestas.php";</script>';
    } else {
        echo '<script> alert("Cesta não atualizada!")</script>';
        echo '<script>window.location.href = "/painel/update_cestas.php";</script>'; 
    }
    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

//header('Location: ../painel/update_cestas.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->