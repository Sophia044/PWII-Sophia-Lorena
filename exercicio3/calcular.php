<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $baseMaior = floatval($_POST['baseMaior']);
    $baseMenor = floatval($_POST['baseMenor']);
    $altura = floatval($_POST['altura']);
    $volume = (($baseMaior +$baseMenor)*$altura)/2;
    echo number_format($volume, 2, ',', '.') . " CM²";
}
?>