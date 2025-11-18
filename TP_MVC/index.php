<?php
require_once "config/db.php";

spl_autoload_register(function($class){
    if (file_exists("controllers/$class.php"))
        include "controllers/$class.php";
    if (file_exists("models/$class.php"))
        include "models/$class.php";
});

$controller = $_GET['c'] ?? 'Lecturer';
$action     = $_GET['a'] ?? 'index';

$controller .= "Controller";

if (!class_exists($controller)) die("Controller not found.");

$obj = new $controller;

if (!method_exists($obj, $action)) die("Action not found.");

$obj->$action();
