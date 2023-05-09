<?php
$host = 'containers-us-west-64.railway.app';
$dbname = 'railway';
$username = 'root';
$password = 'OUkPSgWBS0nIbBkRB2rl';

try {
  $bd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Error al conectarse a la base de datos: " . $e->getMessage();
  die();
}
?>