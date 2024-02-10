<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    
    <title>Ejemplos de Formularios</title>
    <?php
        include 'funciones.php';        
    ?>
    <link rel="stylesheet" 
    type="text/css"
    href="estilo.css"
    title="default"
    >
</head>
<body>
    <div class="Formulario">
        <!--Nombre-->
        
        <form id="formulario" name="formulario" action = "respuesta.php" method = "POST" enctype="multipart/form-data" target="_blank">
            <h1>Formulario</h1>    
            <label for = "Nombre">Nombre del usuario:</label><br>
            <input type = "text" id = "Nombre" name = "Nombre"
            size = "30" maxlength = "50" placeholder = "Nombre(s)" required><br>

            <!--Apellidos-->
            <label for = "apellidoPaterno">Ingresa tu primer apellido:</label><br>
            <input type = "text" id = "apellidoPaterno" name = "apellidoPaterno" placeholder = "Primer Apellido" maxlength="50" size = "30" required><br>

            <label for = "apellidoMaterno">Ingresa tu segundo apellido:</label><br>
            <input type = "text" id = "apellidoMaterno" name = "apellidoMaterno" placeholder = "Segundo Apellido" maxlength="50" size = "30" required><br>        

            <!--Sexo-->
            <label for = "sexo">Sexo</label>
            <select name = "sexo" id = "sexo" required>
                <option value = "Masculino">Masculino</option>
                <option value = "Femenino">Femenino</option>
                <option value = "Otro">Otro</option>
            </select><br>
            
            <!--Fecha de nacimiento-->
            <label for = "FechaNacimiento">Fecha de Nacimiento</label><br>
            <input type = "date" id = "FechaNacimiento"
            name = "FechaNacimiento" value = "2021-12-20"
            min = "1950-01-01" max = "2022-12-01" required><br>

            <!--Pais de origen-->
            <?php 
                selectPaises("paises.txt","paises");
            ?>
            <br>
            <!--Ocupación-->
            <label for = "ocupacion">Ocupación</label><br>
            <select name = "ocupacion" id = "ocupacion" required>
                <option value = "Estudiante">Estudiante</option>
                <option value = "Docente">Docente</option>
                <option value = "Empleado">Empleado</option>
                <option value = "Ninguno">Ninguno</option>
            </select><br>
            
            <!--Curso-->
            <?php 
                selectCurso("cursos");
            ?>
            <br>

            <!--Correo Electronico-->
            <label for = "correo">Correo electrónico</label><br>
            <input type = "email" id = "email" name = "email" required><br>
            
            
            <!--Contraseña-->
            <label for = "clave">Introduce tu clave</label><br>
            <input type = "password" id = "clave" name = "clave"><br>

            <input type="submit" value="Enviar Datos" name="Enviar">
        </form>
    </div>
</body>
</html>