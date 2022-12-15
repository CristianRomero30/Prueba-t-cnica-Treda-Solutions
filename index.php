<?php
 
 $numero = 10;
 $resultado = multiplos($numero);
 echo "La suma de los múltiplos de 3 y 5 menores que $numero es $resultado<br>";

 $frase = "Cristian Andres Romero";
$resultado = invertirPalabras($frase);
echo "La frase $frase invertida  es $resultado";

 
function multiplos($n) {
    $suma = 0;
  
    for ($i = 1; $i < $n; $i++) {
      if ($i % 3 == 0 || $i % 5 == 0) {
        $suma += $i;
      }
    }
  
   
    return $suma;
  }
function invertirPalabras($frase) {
    $palabras = explode(" ", $frase);
    $fraseInvertida = "";
  
    foreach ($palabras as $palabra) {
      if (strlen($palabra) > 5) {
        $fraseInvertida .= strrev($palabra) . " ";
      } else {
        $fraseInvertida .= $palabra . " ";
      }
    }
  
    return trim($fraseInvertida);
  }

  



?>
