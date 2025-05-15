<?php
$comprimento = (float)$_POST['comprimento'];
$altura = (float)$_POST['largura'];
$largura = (float)$_POST['altura'];
$volume = $comprimento * $altura * $largura;
echo number_format($volume, 2, ',', '.') . " km/L";
?>