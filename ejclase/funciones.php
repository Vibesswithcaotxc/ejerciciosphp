<?php

echo "<h2> FUNCIONES PHP </h2>";

function sumar($oper1,$oper2){
    $ressuma = $oper1 + $oper2;

    static $contador = 0;
    echo " <br>Contador: ".$contador++."<br/>";

    global $varglobal;
    $varglobal = 123456;
    return $ressuma;

    
}

function aumentarsuledo(&$operando){
    $operando *=3;
}

echo "<p> Funcion suma </p>";
$dato = sumar(4,6);
$dato = sumar(5,8);
$dato = sumar(3,1);
echo "<p> Resultado suma </p>" . $dato;

$varglobal = 666;
echo "<p>Varglobal con valor ANTES de llamar a sumar </p> " . $varglobal;
$dato = sumar (3,1);
echo "<p>Varglobal con valor DESPUES de llamar a sumar </p> " . $varglobal;

$sueldo =1000;

aumentarsuledo($sueldo);
echo "<p>Sueldo despues de llamada a la función</p>".$sueldo;