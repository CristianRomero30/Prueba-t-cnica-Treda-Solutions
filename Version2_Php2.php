function camelCase($str) {
  // Separar el string en palabras
  $words = explode(' ', $str);

  $camelCase = '';

  // Recorrer cada palabra y convertirla a camelCase
  foreach ($words as $word) {

    // Convertir la primera letra de la palabra a mayúscula y las demás a minúscula
    $camelCase .= ucfirst(strtolower($word));
  }

  return $camelCase;
}

$result = camelCase('Bienvenido a_Treda-solutions');
echo $result;  

$result = camelCase('bienvenido-a_Treda solutions');
echo $result; 
