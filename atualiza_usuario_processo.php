<?php
session_start();

include 'conexao.php';
$id_usuarios = $_SESSION['id_usuarios'];
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
$admin = $_SESSION['adminn'];


$sql_select = "SELECT * FROM `usuarios` WHERE id_usuarios='$id_usuarios'";
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

if ($senha == null) {
    $senha = $senha_select;
}
if ($nome == null) {
    $nome = $nome_select;
}
if ($email == null) {
    $email = $email_select;
}
if ($cpf == null) {
    $cpf = $cpf_select;
}
if ($endereco == null) {
    $endereco = $endereco_select;
}
if ($num == null) {
    $num = $num_select;
}
if ($bairro == null) {
    $bairro = $bairro_select;
}
if ($cep == null) {
    $cep = $cep_select;
}
if ($celular == null) {
    $celular = $celular_select;
}
if ($nascimento == null) {
    $nascimento = $nascimento_select;
};

$sql = "UPDATE `usuarios` SET senha='$senha', nome='$nome', email='$email', cpf='$cpf', endereco='$endereco', num='$num', bairro='$bairro', cep='$cep', celular='$celular', nascimento='$nascimento', adminn='$adminn_select' WHERE id_usuarios='$id_usuarios'";
$update = mysqli_query($conn, $sql);

echo "<br>";
//Confirmação de cadastro
if ($update) {
    echo '<script> alert("Perfil atualizado com sucesso!")</script>';
    $_SESSION['senha'] = $senha;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['endereco'] = $endereco;
    $_SESSION['num'] = $num;
    $_SESSION['bairro'] = $bairro; 
    $_SESSION['cep'] = $cep; 
    $_SESSION['celular'] = $celular; 
    $_SESSION['nascimento'] = $nascimento; 
    echo '<script>window.location.href = "/perfil.php";</script>';
    
} else {
    echo '<script> alert("Falha na atualização!")</script>';
    echo '<script>window.location.href = "/perfil.php";</script>';
}
