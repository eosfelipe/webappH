<?php
$numero = count($_POST);
$tags = array_keys($_POST); // obtiene los nombres de las varibles
$valores = array_values($_POST);// obtiene los valores de las varibles

// crea las variables y les asigna el valor
for($i=0;$i<$numero;$i++){
$$tags[$i]=$valores[$i];
echo json_encode($$tags[$i]);
}

// if(isset($_POST['ordenServicio'])){
//   echo 'ok';
// }
// else{
//   echo 'fallo';
// }
?>
