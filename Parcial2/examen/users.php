<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard - Torneo de Artes Marciales</title>
    
</head>
<body>

<div class="dashboard-container">
    <!-- Ficha de vender Productos -->
    <div class="card">
        <h3>Gestionar Productos</h3>
        <p>Gestiona tu personaje, entrena y mejora tus atributos.</p>
        <a href="dashboardCharacters.php">Ver Perfil</a>
    </div>

    <!-- Ficha de ver catalogo -->
    <div class="card">
        <h3>Gestionar Usuarios</h3>
        <p>Participa en torneos épicos y enfrenta a otros guerreros.</p>
        <a href="dashboardTournaments.php">Ver Torneos</a>
    </div>
</div>

</body>
</html>
