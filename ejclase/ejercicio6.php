
<?php
$directorio_raiz = $_SERVER['DOCUMENT_ROOT'];
$protocolo = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$nombre_servidor = $_SERVER['HTTP_HOST'];
$tipo_peticion = $_SERVER['REQUEST_METHOD'];
$ip_usuario = $_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Información de la Página</title>
</head>
<body>
    <h1>Información de la Página</h1>
    <ul>
        <li>Directorio raíz del documento: <?php echo $directorio_raiz; ?></li>
        <li>Protocolo: <?php echo $protocolo; ?></li>
        <li>Nombre del servidor: <?php echo $nombre_servidor; ?></li>
        <li>Tipo de petición HTTP: <?php echo $tipo_peticion; ?></li>
        <li>Dirección IP del usuario: <?php echo $ip_usuario; ?></li>
    </ul>
</body>
</html>