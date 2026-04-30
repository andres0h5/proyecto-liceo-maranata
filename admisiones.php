<?php 
// 1. Llamamos a la conexión (el puente)
include 'incluir/db.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Matriculas | Admisión</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body style="margin: 0; font-family: sans-serif; background-color: #f4f4f4;">

    <?php include 'incluir/encabezado.php'; ?>

    <main style="padding: 50px 20px;">
        <h1 style="text-align: center; color: #00235a;">Proceso de Admisión</h1>
        <p style="text-align: center;">Completa los datos para iniciar la inscripción del estudiante.</p>
        </main>

        <form>
            <div style="max-width: 600px; margin: auto; background-color: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <label for="nombre" style="display: block; margin-bottom: 10px; font-weight: bold;">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
                
                <label for="correo" style="display: block; margin-bottom: 10px; font-weight: bold;">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
                
                <label for="telefono" style="display: block; margin-bottom: 10px; font-weight: bold;">Número de Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
                
                <button type="submit" style="background-color: #00235a; color: white; padding: 15px 30px; border: none; border-radius: 4px; cursor: pointer;">Enviar Solicitud</button>
            </div>

    <?php include 'incluir/pie-de-pagina.php'; ?>

</body>
</html>