<?php
$host = 'localhost'; // O la dirección IP del servidor
$dbname = 'biblioteca';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);  
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos ";
} catch (PDOException $e) {
    // Manejar la excepción si ocurre un error en la conexión
    echo "Error en la conexión: " . $e->getMessage();
}
?>