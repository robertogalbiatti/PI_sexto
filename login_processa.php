<?php 
session_start();
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$login = mysqli_query($conn, "SELECT senha, email FROM usuarios WHERE senha ='$senha' AND email = '$email'");

$res = mysqli_fetch_row($login);
   if($res)
   {
     //header('location:compras.html');
     echo "fez login com sucesso";
     $_SESSION['login'] = 'rodrigo entrou';
   }

   else
   {
    echo '<script> alert("Senha incorreta ou usuário inexistente!")</script>';
    echo '<script>window.location.href = "/login.php";</script>'; 
   }

   
?>


