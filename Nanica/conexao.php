<?php
$servername = "nanica.mysql.dbaas.com.br";
$username = "nanica";
$password = "PTGNanica2020!";
$dbname = "nanica";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Change character set to utf8
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Banco conectado com sucesso com site! \n";

?>
