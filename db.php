<?php
$host = 'localhost';
$db =   'dragonball';
$user  = 'root';
$password = '';
 
try{
   $pdo = new PDO ("mysql:hoost=$host;dbname=$db", $user, $password);
   $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch ( PDOException $e) {
   die("Error de conexion: " . $e->getMessage());
}
