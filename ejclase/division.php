<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        // Verificar si el divisor es cero
        if ($numero2 == 0) {
            echo "<p>No se puede realizar la operación. Por favor, introduce otro número diferente para el divisor.</p>";
        } else {
            $division = $numero1 / $numero2;
            echo "<p>La división de $numero1 entre $numero2 es igual a $division.</p>";
        }
    }
    ?>