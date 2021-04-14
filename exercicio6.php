<?php


function mostrarChaves($vetor){

    foreach($vetor as $elemento){

        echo $elemento . "; ";

    }
    
}

$vetorParam = ["Ônibus", "Trêm", "Metrô", "Articulado"];

$novoVetor = mostrarChaves($vetorParam);
  