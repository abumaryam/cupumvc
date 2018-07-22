<?php
session_start();
require_once 'bootstrap.php';

// function shutDownFunction() {
// 	$error = error_get_last();
// 	// fatal error, E_ERROR === 1
// 	if ($error !== null) {
// 		header("Location: error.php", true, 301);
// 		exit();
// 	}
// }

// register_shutdown_function('shutDownFunction');

try {

	$run = new $classname();
	$run->$action();

} catch (Error $e) {
	echo 'Message: ' . $e->getMessage();
}