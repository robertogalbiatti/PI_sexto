<?php 
if ($_SESSION['adminn'] !== 2) {
  session_start();
}
//session_start();

include '../conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

//var_dump($email);
//var_dump($senha);
$login = mysqli_query($conn, "SELECT * FROM `usuarios` WHERE senha ='$senha' AND email = '$email' AND adminn = '2'");


$res = mysqli_fetch_row($login);
   if($res)
   {
     //header('location:compras.html');
     echo "fez login com sucesso";
     $_SESSION['login'] = true;
     $_SESSION['id_usuario'] = $res[0];
     $_SESSION['senha'] = $res[1];
     $_SESSION['nome'] = $res[2];
     $_SESSION['email'] = $res[3];
     $_SESSION['cpf'] = $res[4];
     $_SESSION['endereco'] = $res[5];
     $_SESSION['num'] = $res[6];
     $_SESSION['bairro'] = $res[7];
     $_SESSION['cep'] = $res[8];
     $_SESSION['celular'] = $res[9];
     $_SESSION['nascimento'] = $res[10];
     $_SESSION['adminn'] = $res[11];

     echo '<script>window.location.href = "index.php";</script>';
   }

   else
   {
    echo '<script> alert("Senha incorreta ou usuário inexistente!")</script>';
    echo '<script>window.location.href = "/painel/login.php";</script>'; 
   }
?>


