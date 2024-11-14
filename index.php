<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="scss/main.css">
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-black" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/images/logo_arcadia.png" height="40px" alt="Logo d'Arcadia"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nos services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nos habitats</a>
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

    <main id="main-page">

    </main>

    <footer class="bg-black text-white footer">
        <div class="container-xl">
            <div class="d-flex justify-content-center py-2">
                <img src="/assets/images/logo_arcadia.png" height="50px" alt="Logo d'Arcadia">
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <h4 class="text-dark">Infos utiles</h4>
                    <ul class="p-0">
                        <li>
                            <p><span>Tarifs</span> : Gratuit pour les enfants de moins de 3 ans, tarif réduit pour les étudiants et les seniors.</p>
                        </li>
                        <li>
                            <p><span>Accès</span> : Parking gratuit, accessible aux personnes à mobilité réduite.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4 class="text-dark">Horaires</h4>
                    <p>Tours les jours de 8h à 18h</p>
                </div>
                <div class="col-lg-3">
                    <h4 class="text-dark">Coordonnées</h4>
                    <div class="d-flex align-items-center pb-2">
                        <i class="bi bi-geo-alt-fill text-dark pe-2"></i>
                        <p  class="m-0">123 Avenue de la Forêt de Brocéliande
                        56000, Bretagne, France</p>
                    </div>
                    <div class="d-flex align-items-center py-2">
                        <i class="bi bi-telephone-fill text-dark pe-2"></i>
                        <p class="m-0">+33 2 99 99 99 99</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4 class="text-dark text-center">Suivez-nous</h4>
                    <div class="d-flex justify-content-evenly p-2">
                        <a href="#"><i class="bi bi-twitter fs-2 text-dark"></i></a>
                        <a href="#"><i class="bi bi-facebook fs-2 text-dark"></i></a>
                        <a href="#"><i class="bi bi-instagram fs-2 text-dark"></i></a>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center p-2">
                <a href="#" class="mentionsLiens">Mentions Légales</a>
                <a href="#" class="mentionsLiens">Politique de confidentialité</a>
            </div>
        </div>
    </footer>

    <script type="module" src="Router/Router.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>