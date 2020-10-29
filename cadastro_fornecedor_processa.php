<?php 
    include 'conexao.php';
    $razao_social = $_POST['razaosocial'];
    $email = $_POST['email'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $num = $_POST['num'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];

 
    $sql = "INSERT INTO fornecedores (id_fornecedores, razao_social, email, cnpj, endereco, num, bairro, cep, telefone) VALUES (null, '$razao_social','$email','$cnpj','$endereco', '$num', '$bairro', '$cep', '$telefone')";
    $inserir = mysqli_query($conn, $sql);
   
    
//Confirmação de cadastro
if (mysqli_query($conn, $sql)) {
    echo '<script> alert("Cadastro executado com sucesso!")</script>';
    echo '<script>window.location.href = "/cadastro_fornecedor.php";</script>';    
    } 
    else{
    echo '<script> alert("Falha no cadastro!")</script>';
    echo '<script>window.location.href = "/cadastro_fornecedor.php";</script>';        
    }
?>
