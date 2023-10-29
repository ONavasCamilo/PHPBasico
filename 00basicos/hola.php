<?php
// comentario 
/*
Esto es 
un comentario
multilinea
*/
echo 'hola mundo<br>';
echo 'hi mundo<br> <h1>cruel</h1>';
// variables
$nombre = 'jonathan';
$Nombre = 'filipina';
// concatenacion de cadenas y variables
echo $nombre.'<br>'.$Nombre;
echo '<br>';

$num1 = 5;
$num2 = 78;

$suma = $num1+$num2;

echo $suma;

echo "<br>La variable \$suma tiene el valor de $suma<br>";

$modulo = $num2  % 2;
if ($modulo == 0){
    echo '<br>El n&uacute;mero es Par<br>';
} else {
    echo "El n&uacute;mero es Impar";
}

for($i = 0; $i <= 10; $i++) {
    echo $i."<br />";
}
?>