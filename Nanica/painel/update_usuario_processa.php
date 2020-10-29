<?php 
    include '../conexao.php';
    $id_usuarios = $_POST['id_usuarios'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $num = $_POST['num'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $celular = $_POST['celular'];
    $nascimento = $_POST['nascimento'];
    //$adminn = $_POST['adminn'];

    $sql_select = "SELECT senha, nome, email, cpf, endereco, num, bairro, cep, celular, nascimento, adminn FROM `usuarios` WHERE id_usuarios='$id_usuarios'";
    $busca_select = mysqli_query($conn, $sql_select);

    while ($array = mysqli_fetch_array($busca_select)) {
      $id_usuarios_select = $array['id_usuarios'];
      $senha_select = $array['senha'];
      $nome_select = $array['nome'];
      $email_select = $array['email'];
      $cpf_select = $array['cpf'];
      $endereco_select = $array['endereco'];
      $num_select = $array['num'];
      $bairro_select = $array['bairro'];
      $cep_select = $array['cep'];
      $celular_select = $array['celular'];
      $nascimento_select = $array['nascimento'];
      $adminn_select = $array['adminn'];
    }

    if  ($senha == null) {
        $senha = $senha_select;
    } if ($nome == null) {
        $nome = $nome_select;
    } if ($email == null){
        $email = $email_select;
    } if ($cpf == null){
        $cpf = $cpf_select;
    } if ($endereco == null){
        $endereco = $endereco_select;
    } if ($num == null){
        $num_ = $num_select;
    } if ($bairro == null){
        $bairro = $bairro_select;
    } if ($cep == null){
        $cep = $cep_select;
    } if ($celular == null){
        $celular = $celular_select;
    } if ($nascimento == null)
        $nascimento = $nascimento_select;

    
    

    $sql = "UPDATE usuarios SET senha='$senha', nome='$nome', email='$email', cpf='$cpf', endereco='$endereco', num='$num', bairro='$bairro', cep='$cep', celular='$celular', nascimento='$nascimento', adminn='$adminn_select' where id_usuarios='$id_usuarios' ";
    $update = mysqli_query($conn, $sql);
    //echo var_dump($razao_social);
    

//if (mysqli_query($conn, $sql)) {
  //  echo "\nInserido no banco com sucesso rapaiz!\n";
    //} else {
    //echo "\nErro de inserção!: " . $sql . "<br>\n" . mysqli_error($conn);
    //}

header('Location: ../painel/update_usuario.php');
?>
<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->