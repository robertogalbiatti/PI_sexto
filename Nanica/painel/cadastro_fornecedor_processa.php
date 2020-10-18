<?php 
    include '../conexao.php';
    $razao_social = $_POST['razaosocial'];
    $razao_social = $_POST['razaosocial'];
    $razao_social = $_POST['razaosocial'];
    $razao_social = $_POST['razaosocial'];
    $razao_social = $_POST['razaosocial'];
    $razao_social = $_POST['razaosocial'];
    $razao_social = $_POST['razaosocial'];
    $razao_social = $_POST['razaosocial'];

    $sql = "INSERT INTO fornecedores (id_fonecedores, razao_social, email, cnpj, endereco, num, bairro, cep, telefone) VALUES (null, '$razao_social',)";
    $inserir = mysqli_query($conn, $sql);
?>
<h3> Adicionado com sucesso</h3>
window.location.href = "/painel";