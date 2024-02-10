<?php
    function selectPaises($nombreArchivo, $nombreSelect){
        echo "<label for = '".$nombreSelect."'> ¿De que País eres?</label>";
        echo "<br>";
        echo "<select id='".$nombreSelect."' name='".$nombreSelect."'>";
        $archivo = fopen($nombreArchivo, "r") or die("No se pudo encontrar el archivo");
        $linea = fgets($archivo);
        $elementos = explode(",", $linea);
        for($i = 0; $i < count($elementos); $i++){
            echo "<option value=".$i.">".$elementos[$i]."</option>";
        }
        echo "</select>";
    }

    function selectCurso($nombre){
        echo "<label for = '".$nombre."'>".$nombre." Disponibles:</label>";
        echo "<br>";
        echo "<select multiple name = '".$nombre."'>";
        echo "  <option value = 'C'> C </option>";
        echo "  <option value = 'C++'> C++ </option>";
        echo "  <option value = 'Python'> Python </option>";
        echo "  <option value = 'PHP'> PHP </option>";
        echo "  <option value = 'Java'> Java </option>";
        echo "  <option value = 'HTML'> HTML </option>";
        echo "  <option value = 'CSS'> CSS </option>";
        echo "</select>";
    }
?>