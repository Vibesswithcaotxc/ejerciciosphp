<?php
echo "<h2>Resultado encuestas </h2>";
if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {
    if (isset($_POST["lprog"]) && !empty($_POST["lprog"])) {
        $lenguaje = $_POST["lprog"];
        echo "<h4> Tu lenguaje preferido es: $lenguaje</h4>";
    }

    echo "<br> Num eleme : " . count($_POST["ntrans"]);
    if (isset($_POST["ntrans"]) && !empty($_POST["ntrans"])) {
        $transporte = $_POST["ntrans"];
        foreach ($transporte as $transporte) {
            echo "<br>Transporte seleccionado: $transporte";
        }
    }
}
