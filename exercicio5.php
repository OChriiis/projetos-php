<?php
 
  //essa lista pode vir de um banco de dados
  $listaCidades = [
    1 => "São Paulo",
    2 => "Jandira",
    3 => "Itapevi",
    4 => "Barueri",
    5 => "Osasco",
    6 => "Santana de Parnaíba",
    7 => "Carapicuiba",
  ];
 
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../ds2m-a-exercicios-php/styles-global.css" />
  <title>SELECT - COMBO-BOX - DROPDOWN</title>
</head>
 
<body>
  <form method="POST" action="processaexercicio5.php">
    
    <label form="nome">Seu nome/Your name: </label>
    <input type="text" name="nomeUsuario" id="nome">
    <label for="cidades">Cidades/Cities: </label>
    <select id="cidades" autofocus name="cidades" required>
      <option value="">SELECIONE/SELECT</option>
      <?php
        //é uma estrutura de repetição que percorre um vetor inteiro
        //colocando nas variáveis a chave e o valor de cada elemento do vetor em toda repetição
        foreach($listaCidades as $chave => $cidades) {
      ?>
          <option value="<?= $chave ?>"><?= $cidades ?></option>
      <?php
        }
      ?>
    </select>
    <button>Enviar/Send</button>
  </form>
</body>