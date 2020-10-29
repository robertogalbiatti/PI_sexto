<?php 
    include '../conexao.php';
    $id_cadastro_cesta = $_POST['id_cadastro_cesta'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $sql_select = "SELECT nome, preco FROM `cadastro_cesta` WHERE id_cadastro_cesta='$id_cadastro_cesta'";
    $busca_select = mysqli_query($conn, $sql_select);

    while ($array = mysqli_fetch_array($busca_select)) {
      $id_cadastro_cesta_select = $array['id_cadastro_cesta'];
      $nome_select = $array['nome'];
      $preco_select = $array['preco'];
    }

    if  ($nome == null) {
        $nome = $nome_select;
    } if ($preco == null)
        $preco = $preco_select;    

    $sql = "UPDATE cadastro_cesta SET nome='$nome', preco='$preco' where id_cadastro_cesta='$id_cadastro_cesta'";
    $update = mysqli_query($conn, $sql);
    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

header('Location: ../painel/update_cestas.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->