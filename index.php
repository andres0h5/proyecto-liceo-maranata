<?php
// 1. Llamamos al archivo del puente
include 'incluir/db.php';

// 2. Verificamos si la variable $conexion existe y funciona
if ($conexion) {
    echo "<div style='background: green; color: white; padding: 10px; text-align: center;'>";
    echo "¡Conexión Exitosa con la DB del Liceo! Ya puedes empezar a guardar datos, Andrés.";
    echo "</div>";
} else {
    // Si algo falla, el 'die' del archivo db.php se encargará de avisar
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liceo Maranata | Excelencia Educativa</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body style="margin: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5;">

    <?php include 'incluir/encabezado.php'; ?>

    <main style="padding: 50px 20px; max-width: 1200px; margin: auto;">
        
        <section style="background-color: white; padding: 60px; border-radius: 15px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
            <h1 style="color: #00235a; font-size: 2.5rem;">Bienvenidos al Nuevo Portal Institucional</h1>
            <p style="color: #555; font-size: 1.2rem; line-height: 1.6;">
                En el Liceo Maranata, transformamos la educación mediante la tecnología y los valores. 
                Este sitio ha sido rediseñado para ofrecerte una mejor experiencia y accesibilidad.
            </p>
            
            <a href="admisiones.php" style="background-color: #ffcc00; color: #00235a; padding: 18px 35px; text-decoration: none; font-weight: bold; border-radius: 8px; display: inline-block; margin-top: 30px; transition: 0.3s;">
                PROCESO DE ADMISIÓN 2026
            </a>
        </section>

    </main>
    
    <?php include 'incluir/pie-de-pagina.php'; ?>

</body>
</html>