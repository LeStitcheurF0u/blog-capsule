<?php
require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define("DBHOST", $_ENV['DB_HOST']);
define("DBUSER", $_ENV['DB_USER']);
define("DBPASS", $_ENV['DB_PASS']);
define("DBNAME", $_ENV['DB_DATABASE']);


$dsn = "mysql:dbname=" . DBNAME . ";host=" . DBHOST;

try {
    $db = new PDO($dsn, DBUSER, DBPASS);

    $db->exec('SET NAMES "UTF8"');
} catch (PDOException $e) {
    die($e->getMessage());
}
