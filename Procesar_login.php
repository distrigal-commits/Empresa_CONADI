<?php
// Recoge los datos enviados desde el formulario
$nombre_usuario = $_POST['nombre_usuario'];
$contrasena = $_POST['contrasena'];

// 👉 Lógica de validación
// En este ejemplo, validaremos con un usuario y contraseña fijos.
// En un caso real, esto se haría consultando una base de datos.
if ($nombre_usuario === 'admin' && $contrasena === '12345') {
    // Si las credenciales son correctas, redirige al usuario a la página del escáner.
    // Asegúrate de que el nombre del archivo HTML del escáner sea correcto.
    header('options.html');
    exit; // Detiene la ejecución del script para evitar que se envíe más contenido.
} else {
    // Si las credenciales son incorrectas, puedes redirigirlo de vuelta al login
    // con un mensaje de error o simplemente no hacer nada.
    // header('Location: login.html?error=credenciales_invalidas');
    echo "Usuario o contraseña incorrectos.";
}
?>