<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "inventario";



//Guardar el nombre de usuario, contraseña y nombre en la tabla de usuarios usando la función EjecutarSQL()

include("funciones.php");

$sentenciaSQL="INSERT INTO usuarios (usuario, contrasena, nombre)
VALUES ('" . $_REQUEST["usuario"] . "', '" . $_REQUEST["contrasena"] . "', '" . $_REQUEST["nombre"] . "')";


//incluir un archivo de bibliotecas funciones.php que defina la función



EjecutarSQL ($servidor, $usuario, $contrasena, $basedatos, $sentenciaSQL);

// function Suma ($a, $b) { return ($a + $b); };

header("location: menu.php");

?>