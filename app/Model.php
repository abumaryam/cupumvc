<?php 

namespace app;

use PDO;

/**
* Root model
*/
class Model
{
	 public $db;

	function __construct()
	{
		include_once 'config/main.php';
		try {
			$dbh = new \PDO('mysql:host='.$namahost.';dbname='.$dbname, $dbusername, $dbpassword);
			$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			$dbh = null;
		} catch (PDOException $e) {
			print "Terdapat Error Koneksi: " . $e->getMessage() . "<br/>";
			die();
		}
	}
}