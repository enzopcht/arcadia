<?php
require_once __DIR__ . "/../lib/pdo.php";

$animals = [];

try
{
    $query = "SELECT * FROM animals WHERE habitat_id = :habitat_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':habitat_id', $habitatId, PDO::PARAM_INT);
    $stmt->execute();
    $animals = $stmt->fetchAll(PDO::FETCH_ASSOC);


}
catch (Exception $e)
{
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
}


?>