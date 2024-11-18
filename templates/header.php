<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/arcadia/scss/main.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/scss/main.css">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Arcadia'; ?></title>
</head> 
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo route(''); ?>"><img src="<?php echo BASE_URL; ?>/assets/images/logo_arcadia.png" height="40px" alt="Logo d'Arcadia"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo route(''); ?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo route('habitats'); ?>">Nos habitats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo route('services'); ?>">Nos services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Avis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Connexion</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>
    </header>