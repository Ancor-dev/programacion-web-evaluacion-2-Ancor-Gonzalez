<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "registro_evento_apellido");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $rut = $_POST['rut'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $imagen = $_POST['imagen'];

    // Insertar los datos en la tabla
    $sql = "INSERT INTO asistentes (nombre, rut, email, telefono, imagen) 
            VALUES ('$nombre', '$rut', '$email', '$telefono', '$imagen')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro exitoso.";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Asistentes</title>
</head>
<body>
    <h2>Formulario de Registro de Asistentes</h2>
    <form method="POST" action="registro_asistentes.php">
        <label for="nombre">Nombre completo:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="rut">RUT:</label><br>
        <input type="text" id="rut" name="rut" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono" required><br><br>
        
        <label for="imagen">Imagen (URL):</label><br>
        <input type="text" id="imagen" name="imagen"><br><br>
        
        <input type="submit" value="Registrar">
    </form>
</body>
</html>