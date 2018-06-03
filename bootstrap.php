<?php

spl_autoload_register(function ($class) {
	include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$urlnya = $_GET['r'];

if (empty($urlnya)) {
	header("Location: error.php", true, 301);
	exit();
}

$x = explode('/', $urlnya);

if (isset($x) && empty($x[0])) {
	$controller = 'site';
} else {
	$controller = $x[0];
}

$action = (isset($x)) ? 'action' . $x[1] : 'actionIndex';
$classname = (isset($controller)) ? '\controller\\' . ucfirst($controller) . 'Controller' : '\controller\SiteController';
