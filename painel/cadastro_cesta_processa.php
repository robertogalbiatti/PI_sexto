<?php 
    include '../conexao.php';
    $nome= $_POST['nome'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO cadastro_cesta (id_cadastro_cesta, nome, preco) VALUES (null, '$nome','$preco')";
    $inserir = mysqli_query($conn, $sql);
    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

header('Location: ../painel/cadastro_cesta.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->