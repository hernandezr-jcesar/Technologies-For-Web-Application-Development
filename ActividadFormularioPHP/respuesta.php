<?php
    echo "<h1> Valores que se reciben desde el php </h1>";

    $varNombre = $_POST['Nombre'];
    echo "<p> Nombre:".$varNombre."</p>";
    echo "<br>";

    $varPaterno = $_POST['apellidoPaterno'];
    echo "<p> Apellido Paterno:".$varPaterno."</p>";
    echo "<br>";

    $varMAterno = $_POST['apellidoMaterno'];
    echo "<p> Apellido Materno:".$varMaterno."</p>";
    echo "<br>";
    
    $varsexo = $_POST['sexo'];
    echo "<p> Sexo:".$varsexo."</p>";
    echo "<br>";

    $varFechaNacimiento = $_POST['FechaNacimiento'];
    echo "<p> Fecha de Nacimiento:".$varFechaNacimiento."</p>";
    echo "<br>";

    $varPais = $_POST['paises'];
    echo "<p> Pais seleccionado:".$varPais."</p>";
    echo "<br>";

    $varOcupacion = $_POST['ocupacion'];
    echo "<p> Ocupación:".$varOcupacion."</p>";
    echo "<br>";

    $varCurso = $_POST['cursos'];
    echo "<p> Curso seleccionado:".$varCurso."</p>";
    echo "<br>";
    $varEmail = $_POST['email'];
    echo "<p>Email:".$varEmail."</p>";
    echo "<br>";

    $varClave = $_POST['clave'];
    echo"<p> DATOS GUARDADO EN EL ARCHIVO DE TEXTO </p>"
    //LLENADO DE ARCHIVO .TXT
    
    $file = fopen("DatosFormulario.txt", "a")
    or die("Error al crear el archivo");

    fwrite($file,"Datos Obtenidos en el Formulario");
    fwrite($file,"Nombre: ".$varNombre."\n");
    fwrite($file,"Apellido Paterno: ".$varPaterno."\n");
    fwrite($file,"Apellido Paterno: ".$varMaterno."\n");
    fwrite($file,"Sexo: ".$varsexo."\n");
    fwrite($file,"Fecha de Nacimiento: ".$varFechaNacimiento."\n");
    fwrite($file,"Pais: ".$varPais."\n");
    fwrite($file,"Ocupación: ".$varOcupacion."\n");
    fwrite($file,"Curso seleccionado: ".$varCurso."\n");
    fwrite($file,"Email: ".$varEmail."\n");
    fwrite($file,"Clave: ".$varClave."\n");
    fclose($file);
    
?>
