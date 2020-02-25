<?php
function generateRandomString($length = 10) {
    $characters = 'ABCDEFG';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

  sleep((float)(rand(200, 2000)) / 1000);
  
  $numeroElementos = rand(1,5);
  
  $salida = array();
  
  for ($i = 0 ; $i < $numeroElementos ; $i++) {
    $salida[$i] =generateRandomString(rand(5,10));
  }
  
  echo json_encode($salida);
?>
