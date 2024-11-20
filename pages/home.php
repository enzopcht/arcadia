<?php
    require_once __DIR__ . "/../lib/reviews.php";
    require_once __DIR__ . "/../templates/header.php";

    $messagesList = [];
    $errorsList = [];

    if (isset($_POST['saveReview'])) {
        $username = trim($_POST['username']);
        $description = trim($_POST['description']);

        if (strlen($username) > 0 && strlen($description) > 0) {
            
            $lastInsertedId = saveReview($pdo, $username, $description);
            $messagesList[] = "Votre avis a bien été pris en compte et va être validé par l'un de nos employés sous peu.";
        } else {
            $errorsList[] = "Tous les champs sont requis.";
        }
    }
?>

<div class="hero-scene">
    <div class="">
        <div class="hero-scene-content d-flex gap-5 justify-content-center align-items-center">
            <img src="<?php echo BASE_URL; ?>/assets/images/logo_arcadia.png"  alt="Logo d'Arcadia">
            <h1 class="text-primary">Explorez la faune et la flore au cœur d’Arcadia, un zoo éco-responsable</h1>
        </div>
    </div>
</div>

<main>
    <?php foreach ($messagesList as $message) { ?>
        <div class="alert alert-success container-xl mt-3">
            <?= $message; ?>
        </div>
    <?php } 
    foreach ($errorsList as $error) { ?>
        <div class="alert alert-danger container-xl mt-3">
            <?= $error; ?>
        </div>
    <?php } ?>
    <article class="container-xl mx-auto py-5 row align-items-center">
        <div class="col-12 col-lg-6 order-lg-2">
        <img src="<?php echo BASE_URL; ?>/assets/images/presentation/bienvenue_presentation.jpg" class="img-fluid rounded" alt="Image représentant la devanture du Zoo Arcadia">
        </div>
        <div class="col-12 col-lg-6">
            <h2 class="title-div text-primary pt-3 ">Bienvenue au zoo Arcadia</h2>
            <p class="text-body-tertiary">Situé en Bretagne, à la lisière de la forêt mythique de Brocéliande, le zoo Arcadia est bien plus qu’un simple parc animalier. Depuis 1960, nous œuvrons pour la préservation de la biodiversité et l’éducation à l’environnement. Nos engagements envers l’écologie et le bien-être animal se reflètent dans chaque aspect de notre parc, qui offre aux visiteurs une immersion au cœur de la nature et de ses merveilles. Venez explorer un lieu où chaque rencontre avec nos résidents sauvages est une occasion de découvrir et de respecter le monde vivant.</p>
        </div>
    </article>

    <div class="bg-black">
        <article class="container-xl mx-auto py-5 row align-items-center">
            <div class="col-12 col-lg-6">
            <img src="<?php echo BASE_URL; ?>/assets/images/presentation/habitat_presentation.jpg" class="img-fluid rounded" alt="Image représentant les différents habitats d'Arcadia">
            </div>
            <div class="col-12 col-lg-6">
                <h2 class="title-div text-dark pt-3 ">Des habitats recréés pour chaque espèce</h2>
                <div class="text-white">
                    <p>Au zoo Arcadia, nous avons aménagé des habitats uniques qui reproduisent les écosystèmes naturels de nos animaux, leur offrant un environnement adapté et respectueux.</p>
                    <ul>
                        <li><span class="text-dark">La savane</span> : Rencontrez les rois de la savane comme les lions et les girafes dans une vaste plaine verdoyante.</li>
                        <li><span class="text-dark">La savane</span> : Plongez dans une forêt luxuriante, où singes et oiseaux exotiques vivent parmi les lianes et les arbres anciens.</li>
                        <li><span class="text-dark">La savane</span> : Observez les crocodiles et autres espèces aquatiques dans une zone humide inspirée des marécages tropicaux.</li>
                    </ul>
                        <p>Nos vétérinaires et soigneurs veillent quotidiennement à la santé et au bien-être de chaque animal, assurant un suivi attentif de leur alimentation et de leur santé. À Arcadia, chaque habitat est pensé pour préserver l’équilibre entre l’homme et la nature.</p>
                </div>
            </div>
            <div class="col-12 text-center">
                <a href="<?php echo route('nos_habitats'); ?>" class="btn btn-dark">Voir nos habitats</a>
            </div>
        </article>
    </div>

    <article class="container-xl mx-auto py-5 row align-items-center">
        <div class="col-12 col-lg-6 order-lg-2">
        <img src="<?php echo BASE_URL; ?>/assets/images/presentation/services_presentation.jpg" class="img-fluid rounded" alt="Image représentant les services d'Arcadia">
        </div>
        <div class="col-12 col-lg-6">
            <h2 class="title-div text-primary pt-3 ">Des services pour une visite enrichissante et confortable</h2>
            <div class="text-body-tertiary">
                <p>Nous mettons tout en œuvre pour que chaque visite soit agréable et mémorable grâce à nos services respectueux de l’environnement :</p>
                <ul>
                    <li><span class="text-primary">Restauration</span> : Nos espaces de restauration proposent des menus variés élaborés à partir de produits locaux et biologiques, parfaits pour une pause gourmande en harmonie avec nos valeurs.</li>
                    <li><span class="text-primary">Visites guidées</span> : Nos guides passionnés vous accompagnent à la découverte des habitats et des animaux du zoo, en partageant des anecdotes et des informations captivantes sur la conservation.</li>
                    <li><span class="text-primary">Petit train écologique</span> : Profitez d’un tour complet du zoo en petit train, pour une visite confortable et ludique, adaptée aux petits et grands.</li>
                </ul>
            </div>
            <div class="col-12 text-center">
                <a href="<?php echo route('nos_services'); ?>" class="btn btn-primary">Voir nos services</a>
            </div>
        </div>
    </article>

<!-- AVIS -->

<section class="bg-black py-5">
    <div class="container-xl">
        <h2 class="text-center text-white pb-4">Ils parlent de nous</h2>
        <!-- Carousel -->
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                
                <?php $first = true;
                foreach ($lastReviews as $lastreview) { ?>
                    <div class="carousel-item <?= $first ? 'active' : '' ?>">
                        <div class="card mx-auto col-8" >
                            <div class="card-header bg-dark text-white text-center"><?= $lastreview['username'] ?></div>
                            <div class="card-body">
                                <p class="card-text text-center"><?= $lastreview['description'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php $first = false;
                } ?>

                

            <!-- Contrôles -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h3 class="text-center text-white pt-5">Donnez-nous votre avis</h3>
        <!-- Formulaire -->
        <form action="" method="POST" class="p-3 mx-auto col-12 col-lg-8" >
            <div class="mb-3">
                <label for="pseudo" class="form-label text-white">Pseudo</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="username" 
                    name="username" 
                    placeholder="Votre pseudo" 
                    maxlength="50" 
                    required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-white">Votre avis</label>
                <textarea 
                    class="form-control" 
                    id="description" 
                    name="description" 
                    rows="5" 
                    placeholder="Partagez votre expérience du zoo Arcadia" 
                    maxlength="255" 
                    required></textarea>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" class="btn btn-dark" name="saveReview" value="Envoyer">
            </div>
        </form>
    </div>
</section>
</main>
<?php  
        require_once __DIR__ . "/../templates/footer.php";
?>

