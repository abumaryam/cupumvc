<?php 


spl_autoload_register(function($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$hasil  = parse_url($_SERVER['REQUEST_URI']);

$x = explode('/', $hasil['path']);
$controller = $x[count($x)-2];
$action = 'action'.$x[count($x)-1];
$classname = '\controller\\'.ucfirst($controller).'Controller';
$run = new $classname();