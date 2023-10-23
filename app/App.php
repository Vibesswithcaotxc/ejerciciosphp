<?php

class App 
{
    
    function fibonnaci(){
        $max_value = 1000000;
        $a = 0;
        $b = 1;

        while ($a < $max_value) {
            echo $a . "<br>";
            $temp = $a;
            $a = $b;
            $b = $temp + $b;
        }
    }

    function factoriales(){
        function calcularFactorial($n) {
            if ($n <= 1) {
                return 1;
            } else {
                return $n * calcularFactorial($n - 1);
            }
        }
        
        $target = 1000000;
        $n = 1;
        $factorial = 1;
        
        while ($factorial < $target) {
            $n++;
            $factorial = calcularFactorial($n);
        }
        
        echo "Los factoriales desde 1 hasta $n son:<br>";
        
        for ($i = 1; $i <= $n; $i++) {
            echo "Factorial de $i: " . calcularFactorial($i) . "<br>";
        }
    }


}
