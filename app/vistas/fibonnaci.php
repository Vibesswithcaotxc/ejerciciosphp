<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonnaci</title>
</head>
<body>
   <h1>Numeros de fibonnaci hasta el millon</h1>
   <?php
   include "../App.php";
    $app = new App();
    $app->fibonnaci();
   ?>
</body>
</html>