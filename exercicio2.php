<?php

  function encontrarNome(array $vetorNomes, $nomeProcurado){

    foreach($vetorNomes as $nome){

      if($nome == $nomeProcurado){
        return true;
      }

    }

    return false;

  }

  $nomes = ["Gabriel", "Carine", "Italo", "Beatriz", "Gustavo"];

  $nomeAEncontrar = "beatriz";

  if(encontrarNome($nomes, $nomeAEncontrar)){
    echo "$nomeAEncontrar está na lista";
  }else{
    echo "$nomeAEncontrar não está na lista";
  }