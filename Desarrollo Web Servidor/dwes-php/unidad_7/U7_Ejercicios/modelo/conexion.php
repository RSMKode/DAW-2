<?php


//No capturamos la excepción porque lo haremos al incluirla

// Conectamos
$pdo = new PDO('mysql:host=' . $db_hostname . ';dbname=' . $db_nombre, $db_usuario, $db_clave);
// Realiza el enlace con la BD en utf-8
$pdo->exec("set names utf8");
//Accionamos el uso de excepciones
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Si todo va bien en $pdo tendremos el objeto que gestionará la conexión con la base de datos.
