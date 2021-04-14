
<?php
 
$vetor1 = [1, 2, 3, 4, 5, 6];
$vetor2 = [1, 3, 1];

function teste (array $vetor1, array $vetor2){    
  
  if (count($vetor1) > count($vetor2)){
  
    foreach($vetor1 as $valores1){
  
    foreach($vetor2 as $a => $valores2){
  
      if($valores1 == $valores2){
  
        unset($vetor2[$a]);
  
        if(count($vetor2) == 0){
  
        return true;
        
          }  
        }
      }
    }

  }else{
  
    return false;
  
  }

}


echo(teste($vetor1,$vetor2));