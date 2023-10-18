<html>

<head>
    <title>Ejemplo</title>
</head>

<body>
    <?php
    /* ejercicio 1
    $x = 144;
    $y = 999;

    echo "x = " . $x . " e y = " . $y . "<br>";
    echo "suma = " . $x + $y . "<br>";
    echo "resta = " . $x - $y . "<br>";
    echo "division = " . $y / $x . "<br>";
    echo "multiplicacion = " . $x * $y . "<br>"; */

    /* ejercicio 2
    $nombre = "Xuan";
    $direccion = "Emilio Alfaro";
    $mail = "xuan@gmail.com";
    echo "<ul>
            <li> $nombre </li>
            <li> $direccion</li>
            <li> $mail </li>
        </ul> "; */

    /* ejercicio 3
    $pesetas = 166.386;
    $euros = 3.50;

    $cambio = $euros * $pesetas;

    echo $euros . " € en pesetas son: " . $cambio . " pesetas"; */

    /* ejercicio 4
    $cambio = 1;
    while($cambio < 10) {
        $multi = $cambio * 7;
        echo " 7 * " . $cambio . " = " . $multi . "<br>";
        $cambio++; 
    }*/

    /* ejercicio 5
    $dividendo = 0;
    while($dividendo < 10)
    {
        
        if( $dividendo%3 == 0){
            echo $dividendo . "<br>";          
        }
        else{

        }
        $dividendo++;
    }*/

    /*ejercicio 6   
$v1 = 0;
$v2 = 1;
echo $v1 . '<br>';


for ($i=0; $i < 10; $i++) { 
    
    $temp = $v1;

    $v1 = $v2;

    $v2 = $temp + $v1;

    echo $v1 . '<br>';
}*/

    /* ejercicio 7
$num = 123;
$bucle = 1;
$comp = 0;

while($bucle < $num){
    if ($num%$bucle==0){
        echo "$num es divisible entre $bucle <br>";
        $comp++;
    }
    $bucle++;
}
if($comp==0){
    echo "$num es primo"; 
} */

    /* ejercicio 8 y 9
$arraybasket = ['paugasol', 'marcgasol', 'pablolopez', 'xuanalvarez', 'rafanadal'];
$size = count($arraybasket);
for($i = 0; $i < $size; $i++){
    echo $arraybasket[$i] . "<br>";
    echo $i . "\n" . $arraybasket[$i] . "<br>";
} */

    /* ejercicio 10
$arraybasket = ['paugasol' => 'base', 'marcgasol' => 'escolta'];

foreach($arraybasket as $key => $value){
    echo $key . " = " . $value . "<br>";
}*/

    /* ejercicion 11
$paises = array(
    "Pais1" => array(
        "nombre" => "Estados Unidos",
        "moneda" => "Dólar estadounidense",
        "habitantes" => 331002651
    ),
    "Pais2" => array(
        "nombre" => "Brasil",
        "moneda" => "Real brasileño",
        "habitantes" => 212559417
    ),
    "Pais3" => array(
        "nombre" => "China",
        "moneda" => "Yuan chino",
        "habitantes" => 1444216107
    ),
    "Pais4" => array(
        "nombre" => "India",
        "moneda" => "Rupia india",
        "habitantes" => 1380004385
    )
);

foreach ($paises as $clave => $pais) {
    echo "País: " . $pais['nombre'] . "<br>";
    echo "Moneda: " . $pais['moneda'] . "<br>";
    echo "Número de habitantes: " . number_format($pais['habitantes']) . "<br><br>";
} */


    /* ejercicio include ecuacion 2 grado
    include('matematicas.php');
    $a = 1;
    $b = -3;
    $c = 2;
    $solutions = segundoGrado($a, $b, $c);
    if ($solutions !== false) {
        echo "Las soluciones son: " . implode(", ", $solutions);
    } else {
        echo "No hay soluciones reales.";
    }
 */

    function esPalindromo($cadena)
    {
        $cadena = strtolower(str_replace(' ', '', $cadena));

        return $cadena === strrev($cadena);
    }

    $cadena = "somos";
    if (esPalindromo($cadena)) {
        echo "$cadena es un palíndromo.";
    } else {
        echo "$cadena no es un palíndromo.";
    }










    ?>
</body>

</html>