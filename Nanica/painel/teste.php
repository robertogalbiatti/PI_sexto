<?php 
session_start();
if (isset($_SESSION['login'])) {
    echo 'Você está logado'; echo '<br>';
    echo $_SESSION['id_usuario']; echo '<br>';
    echo $_SESSION['senha']; echo '<br>';
    echo $_SESSION['nome']; echo '<br>';
    echo $_SESSION['email']; echo '<br>';
    echo $_SESSION['cpf']; echo '<br>';
    echo $_SESSION['endereco']; echo '<br>';
    echo $_SESSION['num']; echo '<br>';
    echo $_SESSION['bairro']; echo '<br>';
    echo $_SESSION['cep']; echo '<br>';
    echo $_SESSION['celular']; echo '<br>';
    echo $_SESSION['nascimento']; echo '<br>';
    echo $_SESSION['adminn'];

} else {
    echo 'Vocé não está logado';
}

?>
