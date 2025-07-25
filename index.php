<?php
// <!-- exo 1 -->

$jean = 33;
$chaussette = 25;
$chaussure = 75;
$pull = 55;
// var_dump($achat);


function total($param, $param2, $param3, $param4) {
    $achat = $param + $param2 + $param3 + $param4;
    return $achat;
}
$totalAchat = total($jean, $chaussette, $chaussure, $pull);

function totalSolde($param5) {
    $soldeAchat = $param5 * 0.90;
    return  $soldeAchat;
}

$solde = totalSolde($totalAchat);

echo $solde;
