<?php
// Función para establecer el idioma seleccionado en una cookie
function setLanguageCookie($language) {
    setcookie('idioma', $language, time() + 3600, '/');
}

if (isset($_POST['idioma'])) {
    $idioma = $_POST['idioma'];
    setLanguageCookie($idioma);
} elseif (isset($_COOKIE['idioma'])) {
    $idioma = $_COOKIE['idioma'];
} else {
    $idioma = 'espanol';
    setLanguageCookie($idioma);
}
$mensajes = [
    'espanol' => '¡Bienvenido!',
    'ingles' => 'Welcome!',
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Seleccionar Idioma</title>
</head>
<body>
    <h1>Selecciona tu idioma preferido:</h1>
    <form method="post">
        <select name="idioma">
            <option value="espanol" <?php if ($idioma === 'espanol') echo 'selected';?>>Español</option>
            <option value="ingles" <?php if ($idioma === 'ingles') echo 'selected'; ?>>Inglés</option>
        </select>
        <input type="submit" value="Seleccionar">
    </form>

    <h2><?php echo $mensajes[$idioma]; ?></h2>
</body>
</html>