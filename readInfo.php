<?php
  $ids =$_GET['id'];
$conteudo = file("cadastro/$ids");
  foreach($conteudo as $line){
    echo "$line <br>";
}