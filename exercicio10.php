//Não finalizado
<?php

  function encontrarNome(array $vetorNomes, array $nomeProcurado){

    foreach($vetorNomes as $nome){

      if($nome == $nomeProcurado){
        return true;
      }

    }

    return false;

  }

  $nomes = ["Gabriel", "Carine", "Italo", "Beatriz", "Gustavo"];

  $nomeAEncontrar = ["Gabriel", "Carine", "Italo", "Beatriz", "Gustavo"];

  if(encontrarNome($nomes, $nomeAEncontrar)){
    echo "True";
  }else{
    echo "False";
  }

  //Não finalizado