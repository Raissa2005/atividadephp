<?php
extract($_POST);
$arq = fopen("cadastro/$id.txt",'a+');
   $dfunc = "id: $id \r\n nome: $nome \r\n cargo: $cargo \r\n salário: $salario \r\n dependentes: $dependentes";
 $arquivoid = "$id.txt";

  fwrite($arq, $dfunc);
   $arquivoid = 'cadastro/';
 $paragrafo = scandir($arquivoid);

foreach ($paragrafo as $ids){
echo "<a href=readInfo.php?id=".$ids.">Ids: ".$ids."<br>";
}
  array_shift($paragrafo);
 array_shift($paragrafo);
    fclose($arq);



