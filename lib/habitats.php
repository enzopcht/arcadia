<?php
require_once __DIR__ . "/../lib/pdo.php";


try
{
    
    $query = $pdo->prepare("SELECT * FROM habitats");
    $query->execute();
    $habitats = $query->fetchAll(PDO::FETCH_ASSOC);

}
catch (Exception $e)
{
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

function getHabitatById(PDO $pdo, int $id):array | bool
{
    $query = $pdo->prepare('SELECT * FROM habitats WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}


function getHabitatImageById(PDO $pdo, int $id):array
{
    $query = $pdo->prepare('SELECT * FROM habitats_images WHERE habitat_id = :habitat_id');
    $query->bindValue(':habitat_id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}
?>