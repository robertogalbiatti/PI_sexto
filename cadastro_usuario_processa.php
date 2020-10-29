<?php 
    include 'conexao.php';
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
    $admin = "1";

    $sql = "INSERT INTO usuarios (id_usuarios, senha, nome, email, cpf, endereco, num, bairro, cep, celular, nascimento, adminn) VALUES (null, '$senha','$nome','$email','$cpf','$endereco','$num','$bairro','$cep','$celular','$nascimento','$admin')";
    $inserir = mysqli_query($conn, $sql);
    //echo var_dump($razao_social);
    
//Confirmação de cadastro
if (mysqli_query($conn, $sql)) {
    echo '<script> alert("Cadastro executado com sucesso!")</script>';
    echo '<script>window.location.href = "/cadastro_usuario.php";</script>';    
    } 
    else{
    echo '<script> alert("Falha no cadastro!")</script>';
    echo '<script>window.location.href = "/cadastro_usuario.php";</script>';        
    }
?>



<!--<h3> Adicionado com sucesso</h3>-->

<!--!window.location.href = 'http://nanicaorganicos.com.br/painel';-->