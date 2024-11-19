<?php
require_once __DIR__ . "/../lib/pdo.php";

$animals = [];

try
{
    $query = "SELECT * FROM animals";
    $stmt = $pdo->query($query);
    $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);


}
catch (Exception $e)
{
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

function getAnimalById(PDO $pdo, int $id):array | bool
{
    $query = $pdo->prepare('SELECT * FROM animals WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}

function getAnimalSpeciesById(PDO $pdo, int $id):array
{
    $query = $pdo->prepare('SELECT * FROM species WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}


function getAnimalImageById(PDO $pdo, int $id):array|bool
{
    $query = $pdo->prepare('SELECT * FROM animals_images WHERE animal_id = :animal_id');
    $query->bindValue(':animal_id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}
?>