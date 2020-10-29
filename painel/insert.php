<?php

include '../conexao.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = INSERT INTO `usuarios`(`id_usuarios`, `nome`, `email`, `cpf`, `endereco`, `num`, `bairro`, `cep`, `celular`, `nascimento`, `admin`) 
                      VALUES (null,'Roberto','roberto@gmail','37342388888','Rua do vovo',152,'Bairro do vovo','13333333','981483444',1991/07/06,0)

if (mysqli_query($conn, $sql)) {
  echo "Inserido no banco com sucesso rapaiz!";
} else {
  echo "Erro de inserção!: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 