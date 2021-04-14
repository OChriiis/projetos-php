<?php


function mostrarNovoVetor($vetor){

    foreach($vetor as $elemento){

        echo $elemento . "; ";

    }
    
}

$vetorParam = ["Ônibus", "Trêm", "Metrô", "Articulado"];

$novoVetor = mostrarNovoVetor($vetorParam);
  