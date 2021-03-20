<<?php


$vetorValores = ["Maria", "João", 100, "Abobrinha", "Espinafre"];

function inverteVetor($vetorValores){

  for( $i = (count($vetorValores) - 1) ; $i >= 0 ; $i--){

    echo $vetorValores[$i] . " - ";

  }

}

inverteVetor($vetorValores);
