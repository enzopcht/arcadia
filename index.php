<?php
// Charger les routes
require 'config.php';
$routes = require 'routes.php';

// Récupérer l'URI de la requête
$basePath = '/arcadia'; // Chemin de base
$requestUri = str_replace($basePath, '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Vérifier si la route existe
if (array_key_exists($requestUri, $routes)) {
    $route = $routes[$requestUri];
    $pageTitle = $route['title']; // Récupérer le titre
    include $route['file']; // Inclure la page
} else {
    http_response_code(404);
    $pageTitle = 'Erreur 404 - Arcadia'; // Titre pour la page 404
    include 'pages/404.php';
}
?>