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

    /*
    //LLENADO DE ARCHIVO .TXT    
    $nombrearchivo = "DatosFormulario.txt";
    $archivo=fopen($nombrearchivo,"a");
    
    fwrite($archivo,"Datos Obtenidos en el Formulario");
    fwrite($archivo,"\n");
    fwrite($archivo,"Nombre: ".$varNombre);
    fwrite($archivo,"\n");
    fwrite($archivo,"Apellido Paterno: ".$varPaterno);
    fwrite($archivo,"\n");
    fwrite($archivo,"Apellido Paterno: ".$varMaterno);
    fwrite($archivo,"\n");
    fwrite($archivo,"Sexo: ".$varsexo);
    fwrite($archivo,"\n");
    fwrite($archivo,"Fecha de Nacimiento: ".$varFechaNacimiento);
    fwrite($archivo,"\n");
    fwrite($archivo,"Pais: ".$varPais);
    fwrite($archivo,"\n");
    fwrite($archivo,"Ocupación: ".$varOcupacion);
    fwrite($archivo,"\n");
    fwrite($archivo,"Curso seleccionado: ".$varCurso);
    fwrite($archivo,"\n");
    fwrite($archivo,"Email: ".$varEmail);
    fwrite($archivo,"\n");
    fwrite($archivo,"Clave: ".$varClave);
    fwrite($archivo,"\n");
    
    fclose($archivo);
    */
?>
