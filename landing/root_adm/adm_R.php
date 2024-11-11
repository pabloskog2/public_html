<?php
date_default_timezone_set('Chile/Continental'); 
session_start();

$mdv_admin["DBHOST"]	= "localhost";

// Usuario BD
$mdv_admin["DBUSER"] 	= "coloresd_pancho";

// Password BD
$mdv_admin["DBPWD"]		= "Radical7981#";

// Nombre BD
$mdv_admin["DBNAME"]	= "coloresd_mdv";

// Ruta Base
$mdv_admin["ABPATH"] 	= "/";

// Ruta Archivos
$mdv_admin["PHPABPATH"] = $_SERVER['DOCUMENT_ROOT'].$mdv_admin["ABPATH"];

// Ruta Real
$mdv_admin["REAL_RUTE"]	= realpath("");

define("BASEURL","https://coloresdebaron.cl/root_adm/");
define("UPL_URL","https://coloresdebaron.cl/uploads/");
define("SITEURL","https://coloresdebaron.cl/");

define("UPLOAD_RUTE",realpath(""));

// Funciones de Acceso a Datos
require_once("dbaccess.php");

?>