<?php

$dsn = 'mysql:host=localhost;dbname=arcadia';
$username = 'root';
$password = 'Torrez45500@';

try
{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?>