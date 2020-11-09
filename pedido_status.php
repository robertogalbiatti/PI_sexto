<?php include 'inc/header.php';
include 'conexao.php'; ?>;
<?php

$numero_pedido = $_SESSION['numero_pedido'];
$login = mysqli_query($conn, "SELECT * FROM pedido_status WHERE id_pedido = '$numero_pedido'");

$res = mysqli_fetch_row($login);


$id_pedido_status = $res[0];
$pedido_status = $res[1];
$id_pedido = $res[2];


/*while($res){
    $pedido_status=$res[1];
}*/
//print_r($pedido_status);
if ($pedido_status == 1) {
    $print01 = "step completed";
    $print02 = "step";
    $print03 = "step";
    $print04 = "step";
    $print05 = "step";
} elseif ($pedido_status == 2) {
    $print01 = "step completed";
    $print02 = "step completed";
    $print03 = "step";
    $print04 = "step";
    $print05 = "step";
} elseif ($pedido_status == 3) {
    $print01 = "step completed";
    $print02 = "step completed";
    $print03 = "step completed";
    $print04 = "step";
    $print05 = "step";
} elseif ($pedido_status == 4) {
    $print01 = "step completed";
    $print02 = "step completed";
    $print03 = "step completed";
    $print04 = "step completed";
    $print05 = "step";
} elseif ($pedido_status == 5) {
    $print01 = "step completed";
    $print02 = "step completed";
    $print03 = "step completed";
    $print04 = "step completed";
    $print05 = "step completed";
} else {
    echo '<script> alert("Nenhum pedido foi encontrado!")</script>';
    echo '<script>window.location.href = "/index.php";</script>';
}


?>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <div class="container padding-bottom-3x mb-1">
        <div class="card mb-3">
            <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span class="text-uppercase">Pedido Nº - </span>
                <span class="text-medium"><?php echo $id_pedido; ?></span></div>
            <div class="card-body">
                <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                    <div class="<?php echo $print01; ?>">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="pe-7s-cart"></i></div>
                        </div>
                        <h4 class="step-title">Pedido confirmado</h4>
                    </div>
                    <div class="<?php echo $print02; ?>">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="pe-7s-config"></i></div>
                        </div>
                        <h4 class="step-title">Pedido sendo processado</h4>
                    </div>
                    <div class="<?php echo $print03; ?>">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="pe-7s-medal"></i></div>
                        </div>
                        <h4 class="step-title">Cesta sendo preparada</h4>
                    </div>
                    <div class="<?php echo $print04; ?>">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="pe-7s-car"></i></div>
                        </div>
                        <h4 class="step-title">Cesta dispachada</h4>
                    </div>
                    <div class="<?php echo $print05; ?>">
                        <div class="step-icon-wrap">
                            <div class="step-icon"><i class="pe-7s-home"></i></div>
                        </div>
                        <h4 class="step-title">Pedido entregue</h4>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>


</body>

<?php include 'inc/footer.php'; ?>