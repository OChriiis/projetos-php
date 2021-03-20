<?php

  function deletarElemento($vetor, $elementoASerDeletado){


    foreach($vetor as $chave => $elemento){


      if($elemento == $elementoASerDeletado){

      
        unset($vetor[$chave]);

        
        return $vetor;

      }

    }
    
    echo "false";
    return false;

  }

  $vetor = [1,56,9, "ônibus", "trêm", "metrô", "articulado"];

  $novoVetor = deletarElemento($vetor, "ônibus");

  print_r($novoVetor);