<?php
$km = (float)$_POST['km'];
$litros = (float)$_POST['litros'];
$consumo = $km / $litros;
echo number_format($consumo, 2, ',', '.') . " km/L";
?>