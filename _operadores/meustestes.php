
<?php
//Operadores aritméticos
  for ($i = 1; $i <= 10; $i++) {
    if(($i % 2) == 1)  //odd
      {echo "<div style='background-color:#c1c1c1'>$i</div>";}
    else   //even
      {echo "<div class=\"light\">$i</div>";}
   }
?>
