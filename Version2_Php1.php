function getNumbers($n) {
  // Crear un array con los números desde 1 hasta n
  $numeros = rango(1, $n);

  // Verificar si el número es par o impar

  if ($n % 2 === 0) {

    // Si es par, devolver solo los números pares del array
    return array_par_impar($numeros, function($numero) {
      return $numero % 2 === 0;
    });

  } else {

    // Si es impar, devolver solo los números impares del array

    return array_par_impar($numeros, function($numero) {
      return $numero % 2 !== 0;
    });
  }
}

$result = getNumbers(10);
echo $result; 

$result = getNumbers(11);
echo $result; 
