<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mi_empresa";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];


$hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);


$sql = "INSERT INTO usuarios (nombre_usuario, contrasena) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nombre_usuario, $hashed_password);

if ($stmt->execute()) {
    echo "¡Usuario registrado exitosamente!";
    
} else {
    echo "Error al registrar el usuario: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>