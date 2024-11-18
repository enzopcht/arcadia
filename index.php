<?php
// Charger les routes
$routes = require 'routes.php';

// Récupérer l'URI de la requête
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Vérifier si la route existe
if (array_key_exists($requestUri, $routes)) {
    include $routes[$requestUri];
} else {
    http_response_code(404);
    include 'pages/404.php'; // Page d'erreur 404
}
?>