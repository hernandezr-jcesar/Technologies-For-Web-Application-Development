<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    
    <title>Actividad De Clase: Entradas de formulario usando PHP</title>
    <?php
        include 'funciones.php';        
    ?>
</head>
<body>
    <form id="actividadformulario" name="actividadformulario" action = "respuesta.php" method = "POST" enctype="multipart/form-data" target="_blank">
        <!-- Un elemento tipo select de HTML que muestra la opción de elegir el país de nacionalidad de un usuario -->
        <?php 
            selectPaises("paises.txt","paises");
        ?>
        <!-- Un elemento tipo option para elegir al menos 10 diferentes tipos de cursos de preferencia -->
        <br>
        <?php 
            selectCurso("cursos");
        ?>
        <input type="submit" value="Enviar Datos" name="Enviar">
  
    </form>
</body>
</html>
