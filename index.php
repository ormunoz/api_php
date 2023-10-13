<?php 

require_once "controller/rutas.controller.php";
require_once "controller/cursos.controller.php";
require_once "controller/clientes.controller.php";

$rutas = new ControladorRutas();
$rutas-> inicio();


?>