<?php

$string = file_get_contents('dischi.json');
$disc_list = json_decode($string, true);
$result = [];



if(!isset($_GET['discIndex'])){
    // non invio la richiesta del dettaglio quindi stampo tutti i dischi
    $result = $disc_list;
}else{
    // altrimenti seleziono l'oggetto con l'indece arrivato in GET

    $result = $disc_list[$_GET['discIndex']];
}



header('Content-Type: application/json');
echo json_encode($result);