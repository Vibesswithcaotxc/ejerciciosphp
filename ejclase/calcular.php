<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Área</title>
</head>
<body>
    <h1>Resultado del Área</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $figura = $_POST["figura"];

        switch ($figura) {
            case "circulo":
                $radio = 5; // Cambia el valor del radio según tus necesidades
                $area = M_PI * $radio * $radio;
                echo "Área del círculo: " . $area;
                break;

            case "triangulo":
                $base = 6; 
                $altura = 8; 
                $area = 0.5 * $base * $altura;
                echo "Área del triángulo: " . $area;
                break;

            case "cuadrado":
                $lado = 4; // Cambia el valor del lado según tus necesidades
                $area = $lado * $lado;
                echo "Área del cuadrado: " . $area;
                break;

            default:
                echo "Selecciona una figura válida.";
        }
    }
    ?>
    <br>
    <a href="geometria.html">Volver al formulario</a>
</body>
</html>




