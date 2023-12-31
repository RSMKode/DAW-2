<?php

/****
 * Librería donde incluimos aquellos datos (constantes, variables) 
 * que utilizaremos en todo el proyecto/ejercicio
 * @author Roger, Jonathan
 * 
 */

/**
 * Constante que define la ruta del proyecto
 */
const APP_ROOT = "/app-dwes-roger-jonathan/";

/**
 * Ruta de los estilos del proyecto
 */
$rutaEstilos = APP_ROOT . "src/styles.css";

/**
 * Colores de tema de la página
 */
const TEMAS = ['Oscuro', 'Claro'];

/**
 * Tiempo de inactividad del usuario en segundos
 */
$inactivityTime = 60 * 20;

/**
 * Donde almacenaremos las imágenes que nos suben los usuarios
 */
$rutaImagenes = "images";

/**
 * Ruta donde almacenaremos los archivos de texto
 */
$rutaArchivos = "archivos";

/**
 * Array que guarda las extensiones válidas
 */
$extensionesValidas = ["jpeg", "gif", "jpg", "png", "webp"];

/**
 * Tamaño máximo del fichero subido. En bytes
 */
$maxFichero = 2000000;

/**
 * Formatos de fecha válidos
 */
const FORMATOS_FECHA = ["dd-mm-aaaa", "aaaa-mm-dd"];

/**
 * Fecha máxima para la fecha de nacimiento
 */
$fechaHoy = date("Y-m-d", time());

/**
 * Valores de idiomas disponibles para los usuarios
 */
$idiomas = ["Indiferente", "Castellano", "Ingles", "Valenciano",];

/**
 * Categorias disponibles en los servicios
 */
$categorias = ["Categoria 1", "Categoria 2", "Categoria 3"];

/**
 * Disponibilidades horarias para los servicios
 */
$disponibilidades = ["Mañanas", "Tardes", "Noches", "Completa", "Fines de semana"];

/**
 * Valores para opción de pago en los servicios
 */
$pagos = ["Si", "No",];

//Datos de configuración a la BD. Posteriormente los sacaremos a un fichero de configuración config.php

$db_hostname = "localhost";
$db_nombre = "curso_php";

/*
 El usuario root núnca se puede usar, siempre cambiar por otro usuario
 Nosotros lo usaremos para que nos funcionen todos los ejemplos y los ejercicios
 */
$db_usuario = "root";
$db_clave = "";
