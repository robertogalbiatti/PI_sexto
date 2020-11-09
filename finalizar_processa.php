<?php include 'conexao.php';

session_start();
$numero_pedido = $_SESSION['numero_pedido'];
foreach ($_SESSION['dados'] as $produtos) {


    $id_pedido = $produtos['id_pedido'];
    $quantidade = $produtos['quantidade'];
    $total = $produtos['total'];
    $freq = $produtos['freq'];
    $id_usuarios = $_SESSION['id_usuarios'];
    $sql_pedido = "INSERT INTO `pedido` (id_pedido, numero_pedido, id_cadastro_cesta, quantidade, subtotal, recorrencia, frequencia, vizualizado, id_usuarios, id_entregador) VALUES (null,'$numero_pedido','$id_pedido','$quantidade','$total','0','$freq','0','$id_usuarios','0')";

    
    $insere_pedido = mysqli_query($conn, $sql_pedido);
    


    /*echo '<pre>';
    var_dump($produtos);
    echo '</pre>';

    echo '<hr>';
    var_dump($id_pedido);
    var_dump($total);
    var_dump($freq);
    var_dump($id_usuarios);*/
}

$sql_status="INSERT INTO `pedido_status` (id_pedido_status, pedido_status, id_pedido) VALUES (null,'1','$numero_pedido')";
$insere_status = mysqli_query($conn,$sql_status);



$nome = $_SESSION['nome'];
$sql_log = "INSERT INTO `log` (id_log, nome, acao, data_acao) VALUES (null,'$nome','Pedido inserido!',now())";
$insere_log = mysqli_query($conn,$sql_log);


echo '<script>window.location.href = "/compra_concluida.php";</script>';


/*var_dump($id_cadastro_cesta);

echo "<pre>";
var_dump($_SESSION['dados']);
echo "</pre>";

var_dump($_SESSION['numero_pedido']);
*/
?>;