<?php 
    include '../conexao.php';
    $id_fornecedores = $_POST['id_fornecedores'];
    $razao_social = $_POST['razaosocial'];
    $email = $_POST['email'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $num = $_POST['num'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];

    $sql_select = "SELECT razao_social, email, cnpj, endereco, num, bairro, cep, telefone FROM `fornecedores` WHERE id_fornecedores='$id_fornecedores'";
    $busca_select = mysqli_query($conn, $sql_select);

    while ($array = mysqli_fetch_array($busca_select)) {
      $id_fornecedores_select = $array['id_fornecedores'];
      $razao_social_select = $array['razao_social'];
      $email_select = $array['email'];
      $cnpj_select = $array['cnpj'];
      $endereco_select = $array['endereco'];
      $num_select = $array['num'];
      $bairro_select = $array['bairro'];
      $cep_select = $array['cep'];
      $telefone_select = $array['telefone'];
    }

    if  ($razao_social == null) {
        $razao_social = $razao_social_select;
    } if ($email == null) {
        $email = $email_select;
    } if ($cnpj == null){
        $cnpj = $cnpj_select;
    } if ($endereco == null){
        $endereco = $endereco_select;
    } if ($num == null){
        $num = $num_select;
    } if ($bairro == null){
        $bairro = $bairro_select;
    } if ($cep == null){
        $cep = $cep_select;
    } if ($telefone == null)
        $telefone = $telefone_select;
    
    

    $sql = "UPDATE fornecedores SET razao_social='$razao_social', email='$email', cnpj='$cnpj', endereco='$endereco', num='$num', bairro='$bairro', cep='$cep', telefone='$telefone' where id_fornecedores='$id_fornecedores' ";
    $update = mysqli_query($conn, $sql);
    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

header('Location: ../painel/update_fornecedor.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->