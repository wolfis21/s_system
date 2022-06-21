
<?php
require_once 'model/database.php';
require_once 'view/header.php'; 

?>
<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Empleado&a=Mostrar">Ver Empleados</a>
    <a class="btn btn-primary" href="?c=Cliente&a=Mostrar">Ver Clientes</a>
    <a class="btn btn-primary" href="?c=Equipo&a=MostrarRev">Ver Revisiones</a>
</div>

<h1 class="page-header"> ADMINISTRADOR </h1>

<?php

if (isset($_REQUEST['c']) == 'Empleado') {
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func(array($controller, $accion));
} else if (isset($_REQUEST['c']) == 'Cliente') {

    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func(array($controller, $accion));
}