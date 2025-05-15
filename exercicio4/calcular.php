<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $Valor = floatval($_POST['Valor']);
    $divida = (($Valor / 0.16));
    $Valortotal = ($divida + $Valor );
    $Valorparcela = ($Valorparcela = $Valortotal / 10);
    echo number_format("Valor total" .$Valortotal. "<br>". "Valor adicionado". $divida . "o valor da parcela é de ".$Valorparcela ) ;
}
?>