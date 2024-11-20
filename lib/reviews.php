<?php
require_once __DIR__ . "/../lib/pdo.php";

try
{
    
    $query = $pdo->prepare("SELECT * FROM reviews 
                            WHERE is_visible = true 
                            ORDER BY id DESC LIMIT 3");
    $query->execute();
    $lastReviews = $query->fetchAll(PDO::FETCH_ASSOC);

}
catch (Exception $e)
{
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
try
{
    
    $query = $pdo->prepare("SELECT * FROM reviews 
                            WHERE is_visible = true 
                            ORDER BY id DESC LIMIT 10");
    $query->execute();
    $lastTenReviews = $query->fetchAll(PDO::FETCH_ASSOC);

}
catch (Exception $e)
{
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

function saveReview(PDO $pdo, string $username, string $description, bool $isVisible=false):int
{
    $query = $pdo->prepare('INSERT INTO reviews (username, description, is_visible)
                            VALUES (:username, :description, :is_visible)');
    $query->bindValue(':username', $username, PDO::PARAM_STR);
    $query->bindValue(':description', $description, PDO::PARAM_STR);
    $query->bindValue(':is_visible', $isVisible, PDO::PARAM_BOOL);
    $query->execute();

    return $pdo->lastInsertId();
}

