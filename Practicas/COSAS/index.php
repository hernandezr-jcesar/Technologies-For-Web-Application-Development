<?php 
//Declaro los textos que van a usar los botones de los submits
const GUARDAR = 'Guardar';
const VER_DATOS = 'Ver datos';
$datos = [];
//Inicializo las variables que contienen los valores de los inputs a null en caso de que no se haya enviado el formulario aún
$nombre = $_POST['nombre'] ?? null;
$apellido = $_POST['apellido'] ?? null;
//Si el metodo de la solicitud es un post es decir si se envio el formulario y la operacion tiene algun valor
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['operacion'])){
  //Si la operacion es la de guardar.....
  if($_POST['operacion'] === GUARDAR){
      //Abro el archivo para escribir
      $file = @fopen("archivo.txt", "a");        
      //Guardo el arreglo codificado a json
      fwrite($file, "$nombre,$apellido".PHP_EOL);
      //Cierro el archivo
      fclose($file);
      //Si quieres limpiar el formulario despues de guardar los datos descomentarea estas 2 lineas
      //$nombre = null;
      //$apellido = null;
  } else {
      //Si la operacion es la de Cargar o ver y el archivo existe
      if(file_exists('archivo.txt')){
          //Almaceno el contenido completo del archivo en esta variable
          $content = trim(file_get_contents('archivo.txt'), PHP_EOL);
          //Obtengo todas las entradas por lineas del archivo
          $lineas = explode(PHP_EOL, $content);
          foreach($lineas as $linea){
              list($name, $last) = explode(',', $linea);
              $datos[] = ['nombre' => $name, 'apellido' => $last];
          }
      }
  }
}
//Cuerpo de la página
$body = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Formulario</title>
    <style type="text/css">
    </style>
    </head>

    <body bgcolor="#FFFFFF">
    <FORM method="post" name="formulario" autocomplete="off">
    Nombre:<input type="text" name="nombre" id="nombre">

    Apellido: <input type="text" name="apellido" id="apellido">

    <br /><br />
    <input type="submit" value="'.GUARDAR.'" name="operacion">
    <input type="submit" value="'.VER_DATOS.'" name="operacion">
