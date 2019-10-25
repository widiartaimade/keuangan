<?php
include_once('include/Database.php');
define('SS_DB_NAME', 'submission1');
define('SS_DB_USER', 'widiarta@widiartaserver1');
define('SS_DB_PASSWORD', 'w1d14rt@');
define('SS_DB_HOST', 'widiartaserver1.mysql.database.azure.com');

$dsn	= 	"mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
$pdo	=	"";
try {
	$pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
}catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$db 	=	new Database($pdo);
?>