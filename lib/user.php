<?php
require_once __DIR__ . "/../lib/pdo.php";

function verifyUserEmailPassword(PDO $pdo, string $username, string $password):bool|array
{
    $query = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $query->bindValue(':username', $username, PDO::PARAM_STR);
    $query->execute();
    //fetch() nous permet de récupérer une seule ligne
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password_hash'])) {
        // verif ok
        return $user;
    } else {
        // email ou mdp incorrect: on retourne false
        return false;
    }
}

function getUserRoleById(PDO $pdo, int $id):array
{
    $query = $pdo->prepare('SELECT * FROM roles WHERE id = :id');
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    return $query->fetch(PDO::FETCH_ASSOC);
}