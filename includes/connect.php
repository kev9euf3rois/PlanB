<?php

require_once('credentials.php');

define('DB_HOST', $DB_HOST);
define('DB_PORT', $DB_PORT);
define('DB_NAME', $DB_NAME);
define('DB_USER', $DB_USER);
define('DB_PASS', $DB_PASS);

try {
    global $pdo;
    $pdo = new PDO("pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
} catch (PDOException $error) {
    die('Fehler bei der Verbindung zur Datenbank: ' . $error->getMessage());
}

?>