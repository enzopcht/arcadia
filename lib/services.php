<?php
require_once __DIR__ . "/../lib/pdo.php";

try
{
    
    $query = $pdo->prepare("SELECT * FROM services");
    $query->execute();
    $services = $query->fetchAll(PDO::FETCH_ASSOC);

}
catch (Exception $e)
{
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

function getServiceImageById(PDO $pdo, int $id):array|bool
{
    $query = $pdo->prepare('SELECT * FROM services_images WHERE services_id = :services_id');
    $query->bindValue(':services_id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}
?>