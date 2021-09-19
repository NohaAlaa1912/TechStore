<?php
use TechStore\Classes\Request;
use TechStore\Classes\Session;

// paths & urls
// apsolute path--> __DIR__ ->constant b ygem el directory ely ana wa2fa feha 
// $path = "C:/xampp/htdocs/techstor/"; -> //before edit
// $path = __DIR__ . "/";
// -------------------
//pasta5dm el path fe el (include),include_once, require, require_once )
define("PATH", __DIR__ . "/"); 
// pasta5dm el url fe el assets aw linkat el html fe href bta3 el ankor tag w fe el header location w css w js
define("URL", "http://localhost/techstore/");

// 5as bl assets goa al admin
define("APATH", __DIR__ . "/admin/"); 
define("AURL", "http://localhost/techstore/admin/");


// db credentials -> e3dadat el data base
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "techstore");

//include classes 
require_once(PATH . "vendor/autoload.php");



// objects -> ely ha7tagha b4akl motakarr
$request = new Request;
$session = new Session;
?>